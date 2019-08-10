<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\ServiceWorker\DeliverPushMessageRequest;
use ChromeDevtoolsProtocol\Model\ServiceWorker\DispatchPeriodicSyncEventRequest;
use ChromeDevtoolsProtocol\Model\ServiceWorker\DispatchSyncEventRequest;
use ChromeDevtoolsProtocol\Model\ServiceWorker\InspectWorkerRequest;
use ChromeDevtoolsProtocol\Model\ServiceWorker\SetForceUpdateOnPageLoadRequest;
use ChromeDevtoolsProtocol\Model\ServiceWorker\SkipWaitingRequest;
use ChromeDevtoolsProtocol\Model\ServiceWorker\StartWorkerRequest;
use ChromeDevtoolsProtocol\Model\ServiceWorker\StopWorkerRequest;
use ChromeDevtoolsProtocol\Model\ServiceWorker\UnregisterRequest;
use ChromeDevtoolsProtocol\Model\ServiceWorker\UpdateRegistrationRequest;
use ChromeDevtoolsProtocol\Model\ServiceWorker\WorkerErrorReportedEvent;
use ChromeDevtoolsProtocol\Model\ServiceWorker\WorkerRegistrationUpdatedEvent;
use ChromeDevtoolsProtocol\Model\ServiceWorker\WorkerVersionUpdatedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class ServiceWorkerDomain implements ServiceWorkerDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function deliverPushMessage(ContextInterface $ctx, DeliverPushMessageRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'ServiceWorker.deliverPushMessage', $request);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'ServiceWorker.disable', $request);
	}


	public function dispatchPeriodicSyncEvent(ContextInterface $ctx, DispatchPeriodicSyncEventRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'ServiceWorker.dispatchPeriodicSyncEvent', $request);
	}


	public function dispatchSyncEvent(ContextInterface $ctx, DispatchSyncEventRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'ServiceWorker.dispatchSyncEvent', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'ServiceWorker.enable', $request);
	}


	public function inspectWorker(ContextInterface $ctx, InspectWorkerRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'ServiceWorker.inspectWorker', $request);
	}


	public function setForceUpdateOnPageLoad(ContextInterface $ctx, SetForceUpdateOnPageLoadRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'ServiceWorker.setForceUpdateOnPageLoad', $request);
	}


	public function skipWaiting(ContextInterface $ctx, SkipWaitingRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'ServiceWorker.skipWaiting', $request);
	}


	public function startWorker(ContextInterface $ctx, StartWorkerRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'ServiceWorker.startWorker', $request);
	}


	public function stopAllWorkers(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'ServiceWorker.stopAllWorkers', $request);
	}


	public function stopWorker(ContextInterface $ctx, StopWorkerRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'ServiceWorker.stopWorker', $request);
	}


	public function unregister(ContextInterface $ctx, UnregisterRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'ServiceWorker.unregister', $request);
	}


	public function updateRegistration(ContextInterface $ctx, UpdateRegistrationRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'ServiceWorker.updateRegistration', $request);
	}


	public function addWorkerErrorReportedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('ServiceWorker.workerErrorReported', function ($event) use ($listener) {
			return $listener(WorkerErrorReportedEvent::fromJson($event));
		});
	}


	public function awaitWorkerErrorReported(ContextInterface $ctx): WorkerErrorReportedEvent
	{
		return WorkerErrorReportedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'ServiceWorker.workerErrorReported'));
	}


	public function addWorkerRegistrationUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('ServiceWorker.workerRegistrationUpdated', function ($event) use ($listener) {
			return $listener(WorkerRegistrationUpdatedEvent::fromJson($event));
		});
	}


	public function awaitWorkerRegistrationUpdated(ContextInterface $ctx): WorkerRegistrationUpdatedEvent
	{
		return WorkerRegistrationUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'ServiceWorker.workerRegistrationUpdated'));
	}


	public function addWorkerVersionUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('ServiceWorker.workerVersionUpdated', function ($event) use ($listener) {
			return $listener(WorkerVersionUpdatedEvent::fromJson($event));
		});
	}


	public function awaitWorkerVersionUpdated(ContextInterface $ctx): WorkerVersionUpdatedEvent
	{
		return WorkerVersionUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'ServiceWorker.workerVersionUpdated'));
	}
}
