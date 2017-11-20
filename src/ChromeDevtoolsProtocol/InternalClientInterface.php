<?php
namespace ChromeDevtoolsProtocol;

interface InternalClientInterface
{
	public function executeCommand(ContextInterface $ctx, string $method, $parameters);

	public function awaitEvent(ContextInterface $ctx, string $method);

	public function addListener(string $method, callable $listener): SubscriptionInterface;
}
