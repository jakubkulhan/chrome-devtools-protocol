<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\BackgroundService\BackgroundServiceEventReceivedEvent;
use ChromeDevtoolsProtocol\Model\BackgroundService\ClearEventsRequest;
use ChromeDevtoolsProtocol\Model\BackgroundService\RecordingStateChangedEvent;
use ChromeDevtoolsProtocol\Model\BackgroundService\SetRecordingRequest;
use ChromeDevtoolsProtocol\Model\BackgroundService\StartObservingRequest;
use ChromeDevtoolsProtocol\Model\BackgroundService\StopObservingRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class BackgroundServiceDomain implements BackgroundServiceDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function clearEvents(ContextInterface $ctx, ClearEventsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'BackgroundService.clearEvents', $request);
	}


	public function setRecording(ContextInterface $ctx, SetRecordingRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'BackgroundService.setRecording', $request);
	}


	public function startObserving(ContextInterface $ctx, StartObservingRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'BackgroundService.startObserving', $request);
	}


	public function stopObserving(ContextInterface $ctx, StopObservingRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'BackgroundService.stopObserving', $request);
	}


	public function addBackgroundServiceEventReceivedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('BackgroundService.backgroundServiceEventReceived', function ($event) use ($listener) {
			return $listener(BackgroundServiceEventReceivedEvent::fromJson($event));
		});
	}


	public function awaitBackgroundServiceEventReceived(ContextInterface $ctx): BackgroundServiceEventReceivedEvent
	{
		return BackgroundServiceEventReceivedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'BackgroundService.backgroundServiceEventReceived'));
	}


	public function addRecordingStateChangedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('BackgroundService.recordingStateChanged', function ($event) use ($listener) {
			return $listener(RecordingStateChangedEvent::fromJson($event));
		});
	}


	public function awaitRecordingStateChanged(ContextInterface $ctx): RecordingStateChangedEvent
	{
		return RecordingStateChangedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'BackgroundService.recordingStateChanged'));
	}
}
