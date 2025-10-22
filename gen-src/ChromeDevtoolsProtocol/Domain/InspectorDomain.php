<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Inspector\DetachedEvent;
use ChromeDevtoolsProtocol\Model\Inspector\TargetCrashedEvent;
use ChromeDevtoolsProtocol\Model\Inspector\TargetReloadedAfterCrashEvent;
use ChromeDevtoolsProtocol\Model\Inspector\WorkerScriptLoadedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class InspectorDomain implements InspectorDomainInterface
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
		$this->internalClient->executeCommand($ctx, 'Inspector.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Inspector.enable', $request);
	}


	public function addDetachedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Inspector.detached', function ($event) use ($listener) {
			return $listener(DetachedEvent::fromJson($event));
		});
	}


	public function awaitDetached(ContextInterface $ctx): DetachedEvent
	{
		return DetachedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Inspector.detached'));
	}


	public function addTargetCrashedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Inspector.targetCrashed', function ($event) use ($listener) {
			return $listener(TargetCrashedEvent::fromJson($event));
		});
	}


	public function awaitTargetCrashed(ContextInterface $ctx): TargetCrashedEvent
	{
		return TargetCrashedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Inspector.targetCrashed'));
	}


	public function addTargetReloadedAfterCrashListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Inspector.targetReloadedAfterCrash', function ($event) use ($listener) {
			return $listener(TargetReloadedAfterCrashEvent::fromJson($event));
		});
	}


	public function awaitTargetReloadedAfterCrash(ContextInterface $ctx): TargetReloadedAfterCrashEvent
	{
		return TargetReloadedAfterCrashEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Inspector.targetReloadedAfterCrash'));
	}


	public function addWorkerScriptLoadedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Inspector.workerScriptLoaded', function ($event) use ($listener) {
			return $listener(WorkerScriptLoadedEvent::fromJson($event));
		});
	}


	public function awaitWorkerScriptLoaded(ContextInterface $ctx): WorkerScriptLoadedEvent
	{
		return WorkerScriptLoadedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Inspector.workerScriptLoaded'));
	}
}
