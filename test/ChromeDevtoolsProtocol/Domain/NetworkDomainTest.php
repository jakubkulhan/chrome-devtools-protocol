<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\Context;
use ChromeDevtoolsProtocol\Instance\Launcher;
use ChromeDevtoolsProtocol\Model\Network\EnableRequest;
use ChromeDevtoolsProtocol\Model\Network\Request;
use ChromeDevtoolsProtocol\Model\Network\RequestWillBeSentEvent;
use ChromeDevtoolsProtocol\Model\Network\Response;
use ChromeDevtoolsProtocol\Model\Network\ResponseReceivedEvent;
use ChromeDevtoolsProtocol\Model\Page\NavigateRequest;
use PHPUnit\Framework\TestCase;

class NetworkDomainTest extends TestCase
{

	public function testHeadersDeserialization()
	{
		$ctx = Context::withTimeout(Context::background(), 10);
		$launcher = new Launcher();
		$instance = $launcher->launch($ctx);
		try {
			$session = $instance->createSession($ctx);
			try {
				/** @var Request $request */
				$request = null;
				/** @var Response $response */
				$response = null;

				$session->page()->enable($ctx);
				$session->network()->enable($ctx, EnableRequest::builder()->build());
				$session->network()->addRequestWillBeSentListener(function (RequestWillBeSentEvent $ev) use (&$request) {
					$request = $ev->request;
				});
				$session->network()->addResponseReceivedListener(function (ResponseReceivedEvent $ev) use (&$response) {
					$response = $ev->response;
				});
				$session->page()->navigate(
					$ctx,
					NavigateRequest::builder()
						->setUrl("https://httpbin.org/status/200")
						->build()
				);
				$session->page()->awaitLoadEventFired($ctx);

				$this->assertNotNull($request);
				$this->assertNotNull($request->headers);
				$this->assertTrue($request->headers->has("User-Agent"));
				$this->assertTrue($request->headers->has("user-agent"));
				$this->assertNotNull($request->headers->get("User-Agent"));
				$this->assertFalse($request->headers->has("X-No-Header-Here"));
				$this->assertEquals(42, $request->headers->get("X-No-Header-Here", 42));

				$this->assertNotNull($response);
				$this->assertNotNull($response->headers);
				$this->assertTrue($response->headers->has("Date"));
				$this->assertTrue($response->headers->has("date"));
				$this->assertNotNull($response->headers->has("Date"));
				$this->assertFalse($response->headers->has("X-No-Response-Header-Here"));
				$this->assertNull($response->headers->get("X-No-Response-Header-Here"));

			} finally {
				$session->close();
			}

		} finally {
			$instance->close();
		}
	}

}
