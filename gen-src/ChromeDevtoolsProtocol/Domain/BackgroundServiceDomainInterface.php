<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\BackgroundService\DisableRequest;
use ChromeDevtoolsProtocol\Model\BackgroundService\EnableRequest;
use ChromeDevtoolsProtocol\Model\BackgroundService\RecordingStateChangedEvent;
use ChromeDevtoolsProtocol\Model\BackgroundService\SetRecordingRequest;
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
	 * Call BackgroundService.disable command.
	 *
	 * @param ContextInterface $ctx
	 * @param DisableRequest $request
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx, DisableRequest $request): void;


	/**
	 * Call BackgroundService.enable command.
	 *
	 * @param ContextInterface $ctx
	 * @param EnableRequest $request
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx, EnableRequest $request): void;


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
