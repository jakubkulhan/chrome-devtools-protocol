<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Cast\EnableRequest;
use ChromeDevtoolsProtocol\Model\Cast\IssueUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Cast\SetSinkToUseRequest;
use ChromeDevtoolsProtocol\Model\Cast\SinksUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Cast\StartDesktopMirroringRequest;
use ChromeDevtoolsProtocol\Model\Cast\StartTabMirroringRequest;
use ChromeDevtoolsProtocol\Model\Cast\StopCastingRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class CastDomain implements CastDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Cast.disable', $request);
	}


	public function enable(ContextInterface $ctx, EnableRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Cast.enable', $request);
	}


	public function setSinkToUse(ContextInterface $ctx, SetSinkToUseRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Cast.setSinkToUse', $request);
	}


	public function startDesktopMirroring(ContextInterface $ctx, StartDesktopMirroringRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Cast.startDesktopMirroring', $request);
	}


	public function startTabMirroring(ContextInterface $ctx, StartTabMirroringRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Cast.startTabMirroring', $request);
	}


	public function stopCasting(ContextInterface $ctx, StopCastingRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Cast.stopCasting', $request);
	}


	public function addIssueUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Cast.issueUpdated', function ($event) use ($listener) {
			return $listener(IssueUpdatedEvent::fromJson($event));
		});
	}


	public function awaitIssueUpdated(ContextInterface $ctx): IssueUpdatedEvent
	{
		return IssueUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Cast.issueUpdated'));
	}


	public function addSinksUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Cast.sinksUpdated', function ($event) use ($listener) {
			return $listener(SinksUpdatedEvent::fromJson($event));
		});
	}


	public function awaitSinksUpdated(ContextInterface $ctx): SinksUpdatedEvent
	{
		return SinksUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Cast.sinksUpdated'));
	}
}
