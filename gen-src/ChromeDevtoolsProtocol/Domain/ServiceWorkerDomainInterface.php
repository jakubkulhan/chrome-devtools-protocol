<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\ServiceWorker\DeliverPushMessageRequest;
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

/**
 * ServiceWorker domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface ServiceWorkerDomainInterface
{
	/**
	 * Call ServiceWorker.deliverPushMessage command.
	 *
	 * @param ContextInterface $ctx
	 * @param DeliverPushMessageRequest $request
	 *
	 * @return void
	 */
	public function deliverPushMessage(ContextInterface $ctx, DeliverPushMessageRequest $request): void;


	/**
	 * Call ServiceWorker.disable command.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Call ServiceWorker.dispatchSyncEvent command.
	 *
	 * @param ContextInterface $ctx
	 * @param DispatchSyncEventRequest $request
	 *
	 * @return void
	 */
	public function dispatchSyncEvent(ContextInterface $ctx, DispatchSyncEventRequest $request): void;


	/**
	 * Call ServiceWorker.enable command.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Call ServiceWorker.inspectWorker command.
	 *
	 * @param ContextInterface $ctx
	 * @param InspectWorkerRequest $request
	 *
	 * @return void
	 */
	public function inspectWorker(ContextInterface $ctx, InspectWorkerRequest $request): void;


	/**
	 * Call ServiceWorker.setForceUpdateOnPageLoad command.
	 *
	 * @param ContextInterface $ctx
	 * @param SetForceUpdateOnPageLoadRequest $request
	 *
	 * @return void
	 */
	public function setForceUpdateOnPageLoad(ContextInterface $ctx, SetForceUpdateOnPageLoadRequest $request): void;


	/**
	 * Call ServiceWorker.skipWaiting command.
	 *
	 * @param ContextInterface $ctx
	 * @param SkipWaitingRequest $request
	 *
	 * @return void
	 */
	public function skipWaiting(ContextInterface $ctx, SkipWaitingRequest $request): void;


	/**
	 * Call ServiceWorker.startWorker command.
	 *
	 * @param ContextInterface $ctx
	 * @param StartWorkerRequest $request
	 *
	 * @return void
	 */
	public function startWorker(ContextInterface $ctx, StartWorkerRequest $request): void;


	/**
	 * Call ServiceWorker.stopAllWorkers command.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function stopAllWorkers(ContextInterface $ctx): void;


	/**
	 * Call ServiceWorker.stopWorker command.
	 *
	 * @param ContextInterface $ctx
	 * @param StopWorkerRequest $request
	 *
	 * @return void
	 */
	public function stopWorker(ContextInterface $ctx, StopWorkerRequest $request): void;


	/**
	 * Call ServiceWorker.unregister command.
	 *
	 * @param ContextInterface $ctx
	 * @param UnregisterRequest $request
	 *
	 * @return void
	 */
	public function unregister(ContextInterface $ctx, UnregisterRequest $request): void;


	/**
	 * Call ServiceWorker.updateRegistration command.
	 *
	 * @param ContextInterface $ctx
	 * @param UpdateRegistrationRequest $request
	 *
	 * @return void
	 */
	public function updateRegistration(ContextInterface $ctx, UpdateRegistrationRequest $request): void;


	/**
	 * Subscribe to ServiceWorker.workerErrorReported event.
	 *
	 * Listener will be called whenever event ServiceWorker.workerErrorReported is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addWorkerErrorReportedListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for ServiceWorker.workerErrorReported event.
	 *
	 * Method will block until first ServiceWorker.workerErrorReported event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return WorkerErrorReportedEvent
	 */
	public function awaitWorkerErrorReported(ContextInterface $ctx): WorkerErrorReportedEvent;


	/**
	 * Subscribe to ServiceWorker.workerRegistrationUpdated event.
	 *
	 * Listener will be called whenever event ServiceWorker.workerRegistrationUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addWorkerRegistrationUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for ServiceWorker.workerRegistrationUpdated event.
	 *
	 * Method will block until first ServiceWorker.workerRegistrationUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return WorkerRegistrationUpdatedEvent
	 */
	public function awaitWorkerRegistrationUpdated(ContextInterface $ctx): WorkerRegistrationUpdatedEvent;


	/**
	 * Subscribe to ServiceWorker.workerVersionUpdated event.
	 *
	 * Listener will be called whenever event ServiceWorker.workerVersionUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addWorkerVersionUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for ServiceWorker.workerVersionUpdated event.
	 *
	 * Method will block until first ServiceWorker.workerVersionUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return WorkerVersionUpdatedEvent
	 */
	public function awaitWorkerVersionUpdated(ContextInterface $ctx): WorkerVersionUpdatedEvent;
}
