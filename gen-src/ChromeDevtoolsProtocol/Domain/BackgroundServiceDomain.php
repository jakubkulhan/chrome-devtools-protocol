<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\BackgroundService\DisableRequest;
use ChromeDevtoolsProtocol\Model\BackgroundService\EnableRequest;
use ChromeDevtoolsProtocol\Model\BackgroundService\RecordingStateChangedEvent;
use ChromeDevtoolsProtocol\Model\BackgroundService\SetRecordingRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class BackgroundServiceDomain implements BackgroundServiceDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function disable(ContextInterface $ctx, DisableRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'BackgroundService.disable', $request);
	}


	public function enable(ContextInterface $ctx, EnableRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'BackgroundService.enable', $request);
	}


	public function setRecording(ContextInterface $ctx, SetRecordingRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'BackgroundService.setRecording', $request);
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
