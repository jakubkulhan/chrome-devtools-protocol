<?php
namespace ChromeDevtoolsProtocol\Instance;

use ChromeDevtoolsProtocol\Context;
use ChromeDevtoolsProtocol\Exception\LogicException;
use ChromeDevtoolsProtocol\Model\Page\NavigateRequest;
use PHPUnit\Framework\TestCase;

class LauncherTest extends TestCase
{

	public function testLaunch()
	{
		$ctx = Context::withTimeout(Context::background(), 30);
		$launcher = new Launcher();
		$instance = $launcher->launch($ctx);
		try {
			$tabs = $instance->tabs($ctx);

			foreach ($tabs as $tab) {
				$tab->close($ctx);
			}

			$tab = $instance->open($ctx);
			$this->assertEquals("about:blank", $tab->url);

			$devtools = $tab->devtools();
			try {
				$devtools->page()->enable($ctx);
				$devtools->page()->navigate($ctx, NavigateRequest::builder()->setUrl("https://google.com/")->build());
				$devtools->page()->awaitLoadEventFired($ctx);

				$this->assertTrue(true, "Ok, google works");

			} finally {
				$devtools->close();
			}

		} finally {
			$instance->close();
		}
	}

	public function testLaunchRemoteDebuggingPort()
	{
		$this->expectException(LogicException::class);

		$ctx = Context::withTimeout(Context::background(), 30);
		$launcher = new Launcher(2229);
		$instance = $launcher->launch($ctx, "--remote-debugging-port=9222");
		$instance->close();
	}

}
