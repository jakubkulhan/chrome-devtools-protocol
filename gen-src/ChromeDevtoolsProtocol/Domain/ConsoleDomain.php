<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Console\MessageAddedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class ConsoleDomain implements ConsoleDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function clearMessages(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Console.clearMessages', $request);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Console.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Console.enable', $request);
	}


	public function addMessageAddedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Console.messageAdded', function ($event) use ($listener) {
			return $listener(MessageAddedEvent::fromJson($event));
		});
	}


	public function awaitMessageAdded(ContextInterface $ctx): MessageAddedEvent
	{
		return MessageAddedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Console.messageAdded'));
	}
}
