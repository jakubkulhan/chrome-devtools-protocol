<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Log\EntryAddedEvent;
use ChromeDevtoolsProtocol\Model\Log\StartViolationsReportRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class LogDomain implements LogDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Log.enable', $request);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Log.disable', $request);
	}


	public function clear(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Log.clear', $request);
	}


	public function startViolationsReport(ContextInterface $ctx, StartViolationsReportRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Log.startViolationsReport', $request);
	}


	public function stopViolationsReport(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Log.stopViolationsReport', $request);
	}


	public function addEntryAddedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Log.entryAdded', function ($event) use ($listener) {
			return $listener(EntryAddedEvent::fromJson($event));
		});
	}


	public function awaitEntryAdded(ContextInterface $ctx): EntryAddedEvent
	{
		return EntryAddedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Log.entryAdded'));
	}
}
