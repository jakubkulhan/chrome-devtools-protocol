<?php
namespace ChromeDevtoolsProtocol;

use ChromeDevtoolsProtocol\Exception\DeadlineException;
use ChromeDevtoolsProtocol\Exception\ErrorException;
use ChromeDevtoolsProtocol\Instance\Launcher;
use ChromeDevtoolsProtocol\Model\Network\EnableRequest;
use ChromeDevtoolsProtocol\Model\Network\GetResponseBodyRequest;
use ChromeDevtoolsProtocol\Model\Network\LoadingFinishedEvent;
use ChromeDevtoolsProtocol\Model\Page\NavigateRequest;
use ChromeDevtoolsProtocol\Model\Security\CertificateErrorActionEnum;
use ChromeDevtoolsProtocol\Model\Security\CertificateErrorEvent;
use ChromeDevtoolsProtocol\Model\Security\HandleCertificateErrorRequest;
use ChromeDevtoolsProtocol\Model\Security\SetOverrideCertificateErrorsRequest;
use ChromeDevtoolsProtocol\WebSocket\WebSocketClient;
use PHPUnit\Framework\TestCase;
use Wrench\Payload\Payload;

class DevtoolsClientTest extends TestCase
{

	public function testHandleCertificateError()
	{
		$ctx = Context::withTimeout(Context::background(), 10);
		$launcher = new Launcher();
		$instance = $launcher->launch($ctx);
		try {
			$tab = $instance->tabs($ctx)[0];

			$client = $tab->devtools();
			try {
				$client->page()->enable($ctx);
				$client->network()->enable($ctx, EnableRequest::make());
				$client->security()->enable($ctx);
				$client->security()->setOverrideCertificateErrors(
					$ctx,
					SetOverrideCertificateErrorsRequest::builder()
						->setOverride(true)
						->build()
				);
				$client->security()->addCertificateErrorListener(function (CertificateErrorEvent $ev) use ($ctx, $client) {
					$client->security()->handleCertificateError(
						$ctx,
						HandleCertificateErrorRequest::builder()
							->setEventId($ev->eventId)
							->setAction(CertificateErrorActionEnum::CONTINUE)
							->build()
					);
				});
				$client->page()->navigate($ctx, NavigateRequest::builder()->setUrl("https://untrusted-root.badssl.com/")->build());
				$client->page()->awaitLoadEventFired($ctx);

				$this->assertTrue(true, "Ok, handling certificate errors works");

			} finally {
				$client->close();
			}

		} finally {
			$instance->close();
		}
	}

	public function testErrorHandling()
	{
		$this->expectException(ErrorException::class);

		$ctx = Context::withTimeout(Context::background(), 10);
		$launcher = new Launcher();
		$instance = $launcher->launch($ctx);
		try {
			$tabs = $instance->tabs($ctx);
			foreach ($tabs as $tab) {
				$tab->close($ctx);
			}

			$tab = $instance->open($ctx);
			$this->assertEquals("about:blank", $tab->url);

			/** @var DevtoolsClientInterface & InternalClientInterface $client */
			$client = $tab->devtools();
			try {

				$client->executeCommand($ctx, "SomeCommand.thatDoesNotExist", new \stdClass());

			} finally {
				$client->close();
			}
		} finally {
			$instance->close();
		}
	}

	/*
	 * https://github.com/jakubkulhan/chrome-devtools-protocol/issues/14
	 */
	public function testConflictBetweenAwaitAndExecute()
	{
		// websocket messages
		$responses = [];
		$addResponse = function($payload) use(&$responses) {
			$payloadStub = $this->getMockBuilder(Payload::class)
				->disableOriginalConstructor()
				->getMock();
			$payloadStub->method('getPayload')->willReturn($payload);
			$responses[] = $payloadStub;
		};

		// create a stub websocket client, which returns predefined messages
		$wsClient = $this->getMockBuilder(WebSocketClient::class)
			->disableOriginalConstructor()
			->getMock();
		$wsClient->method('receive')->willReturnCallback(function() use(&$responses) {
			if (!empty($responses)) {
				return [array_shift($responses)];
			}
			return null;
		});
		$wsClient->method('setDeadline')->willReturnCallback(function($deadline) {
			$timeout = floatval($deadline->format("U.u")) - microtime(true);
			if ($timeout < 0.0) {
				throw new DeadlineException("Socket deadline reached.");
			}
		});

		// create the failing scenario
		$ctx = Context::withTimeout(Context::background(), 3);

		$client = new DevtoolsClient($wsClient);
		register_shutdown_function(function () use ($client) { $client->close(); });

		$addResponse('{"id":1,"result":{}}');
		$client->page()->enable($ctx);

		$addResponse('{"id":2,"result":{}}');
		$client->network()->enable($ctx, EnableRequest::make());

		$client->network()->addLoadingFinishedListener(function (LoadingFinishedEvent $event) use($ctx, $client, $addResponse) { // <- 2

			// The order of these responses matters, if the loadEventFired comes first, awaitLoadEventFired (1) would wait forever
			$addResponse('{"method":"Page.loadEventFired","params":{"timestamp":6758.846787}}');
			$addResponse('{"id":4,"result":{"body":"..."}}');

			$client->network()->getResponseBody($ctx, GetResponseBodyRequest::builder() // <- 3
				->setRequestId($event->requestId)
				->build()
			);
		});

		$url = 'https://www.google.com';

		$addResponse('{"id":3,"result":{"frameId":"1E56ACDD9B3B7F678F972C0EF0782649","loaderId":"AAF889CAE5B10663CA8D383A6125AC1B"}}');
		$client->page()->navigate($ctx, NavigateRequest::builder()->setUrl($url)->build());

		$addResponse('{"method":"Network.loadingFinished","params":{"requestId":"AAF889CAE5B10663CA8D383A6125AC1B","timestamp":6758.623335,"encodedDataLength":67174,"shouldReportCorbBlocking":false}}');
		$client->page()->awaitLoadEventFired($ctx); // <- 1

		$this->assertTrue((bool)'No conflict');

		/*

		1) we are waiting for the LoadEvent, but in the meanwhile the LoadingFinishedEvent arrives ->
		2) so the listener is called
		3) getResponseBody command is executed
		    - if the response is received before LoadEvent, everything is fine
		    - but if the LoadEvent is happening before the response is received,
		      the LoadEvent is dropped (not buffered) and awaitLoadEventFired could never return

		*/
	}


}
