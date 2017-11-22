<?php
namespace ChromeDevtoolsProtocol;

use ChromeDevtoolsProtocol\Instance\Launcher;
use ChromeDevtoolsProtocol\Model\Network\EnableRequest;
use ChromeDevtoolsProtocol\Model\Network\GetCookiesRequest;
use ChromeDevtoolsProtocol\Model\Page\NavigateRequest;
use ChromeDevtoolsProtocol\Model\Security\CertificateErrorActionEnum;
use ChromeDevtoolsProtocol\Model\Security\CertificateErrorEvent;
use ChromeDevtoolsProtocol\Model\Security\HandleCertificateErrorRequest;
use ChromeDevtoolsProtocol\Model\Security\SetOverrideCertificateErrorsRequest;
use PHPUnit\Framework\TestCase;

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

}
