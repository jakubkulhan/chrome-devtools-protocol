<?php
namespace ChromeDevtoolsProtocol\Instance;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Instance\Version;
use ChromeDevtoolsProtocol\Session;

/**
 * Instance represents one running Chrome.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface InstanceInterface
{
	/**
	 * List opened tabs.
	 *
	 * Issues HTTP request for `POST /json/list`.
	 *
	 * @param ContextInterface $ctx
	 * @return Tab[]
	 */
	public function tabs(ContextInterface $ctx): array;

	/**
	 * Open new tab.
	 *
	 * Issues HTTP request for `POST /json/new`.
	 *
	 * @param ContextInterface $ctx
	 * @param string|null $url
	 * @return Tab
	 */
	public function open(ContextInterface $ctx, ?string $url = null): Tab;

	/**
	 * Get version.
	 *
	 * Issues HTTP request for `POST /json/version`.
	 *
	 * @param ContextInterface $ctx
	 * @return Version
	 */
	public function version(ContextInterface $ctx): Version;

	/**
	 * Creates isolated context in browser (i.e. no cookies etc. are shared), like incognito window.
	 *
	 * @param ContextInterface $ctx
	 * @param string $url
	 * @return Session
	 */
	public function createSession(ContextInterface $ctx, string $url = "about:blank"): Session;

}
