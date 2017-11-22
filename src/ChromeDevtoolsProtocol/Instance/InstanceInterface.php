<?php
namespace ChromeDevtoolsProtocol\Instance;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Instance\Version;
use ChromeDevtoolsProtocol\Session;

/**
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface InstanceInterface
{
	/**
	 * @param ContextInterface $ctx
	 * @return array
	 */
	public function tabs(ContextInterface $ctx): array;

	public function open(ContextInterface $ctx, ?string $url = null): Tab;

	public function version(ContextInterface $ctx): Version;

	public function createSession(ContextInterface $ctx, string $url = "about:blank"): Session;

}
