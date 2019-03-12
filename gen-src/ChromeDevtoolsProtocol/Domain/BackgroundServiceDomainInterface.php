<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\BackgroundService\BackgroundServiceEventReceivedEvent;
use ChromeDevtoolsProtocol\Model\BackgroundService\ClearEventsRequest;
use ChromeDevtoolsProtocol\Model\BackgroundService\RecordingStateChangedEvent;
use ChromeDevtoolsProtocol\Model\BackgroundService\SetRecordingRequest;
use ChromeDevtoolsProtocol\Model\BackgroundService\StartObservingRequest;
use ChromeDevtoolsProtocol\Model\BackgroundService\StopObservingRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * Defines events for background web platform features.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface BackgroundServiceDomainInterface
{
	/**
	 * Clears all stored data for the service.
	 *
	 * @param ContextInterface $ctx
	 * @param ClearEventsRequest $request
	 *
	 * @return void
	 */
	public function clearEvents(ContextInterface $ctx, ClearEventsRequest $request): void;


	/**
	 * Set the recording state for the service.
	 *
	 * @param ContextInterface $ctx
	 * @param SetRecordingRequest $request
	 *
	 * @return void
	 */
	public function setRecording(ContextInterface $ctx, SetRecordingRequest $request): void;


	/**
	 * Enables event updates for the service.
	 *
	 * @param ContextInterface $ctx
	 * @param StartObservingRequest $request
	 *
	 * @return void
	 */
	public function startObserving(ContextInterface $ctx, StartObservingRequest $request): void;


	/**
	 * Disables event updates for the service.
	 *
	 * @param ContextInterface $ctx
	 * @param StopObservingRequest $request
	 *
	 * @return void
	 */
	public function stopObserving(ContextInterface $ctx, StopObservingRequest $request): void;


	/**
	 * Called with all existing backgroundServiceEvents when enabled, and all new events afterwards if enabled and recording.
	 *
	 * Listener will be called whenever event BackgroundService.backgroundServiceEventReceived is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addBackgroundServiceEventReceivedListener(callable $listener): SubscriptionInterface;


	/**
	 * Called with all existing backgroundServiceEvents when enabled, and all new events afterwards if enabled and recording.
	 *
	 * Method will block until first BackgroundService.backgroundServiceEventReceived event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return BackgroundServiceEventReceivedEvent
	 */
	public function awaitBackgroundServiceEventReceived(ContextInterface $ctx): BackgroundServiceEventReceivedEvent;


	/**
	 * Called when the recording state for the service has been updated.
	 *
	 * Listener will be called whenever event BackgroundService.recordingStateChanged is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addRecordingStateChangedListener(callable $listener): SubscriptionInterface;


	/**
	 * Called when the recording state for the service has been updated.
	 *
	 * Method will block until first BackgroundService.recordingStateChanged event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return RecordingStateChangedEvent
	 */
	public function awaitRecordingStateChanged(ContextInterface $ctx): RecordingStateChangedEvent;
}
