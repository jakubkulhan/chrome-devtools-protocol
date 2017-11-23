<?php
namespace ChromeDevtoolsProtocol;

/**
 * Internal interface for devtools client (sends raw messages).
 *
 * @internal
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface InternalClientInterface
{
	/**
	 * @internal
	 */
	public function executeCommand(ContextInterface $ctx, string $method, $parameters);

	/**
	 * @internal
	 */
	public function awaitEvent(ContextInterface $ctx, string $method);

	/**
	 * @internal
	 */
	public function addListener(string $method, callable $listener): SubscriptionInterface;
}
