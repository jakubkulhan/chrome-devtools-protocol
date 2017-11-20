<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\HeadlessExperimental\BeginFrameRequest;
use ChromeDevtoolsProtocol\Model\HeadlessExperimental\BeginFrameResponse;
use ChromeDevtoolsProtocol\Model\HeadlessExperimental\MainFrameReadyForScreenshotsEvent;
use ChromeDevtoolsProtocol\Model\HeadlessExperimental\NeedsBeginFramesChangedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class HeadlessExperimentalDomain implements HeadlessExperimentalDomainInterface
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
		$this->internalClient->executeCommand($ctx, 'HeadlessExperimental.enable', $request);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'HeadlessExperimental.disable', $request);
	}


	public function beginFrame(ContextInterface $ctx, BeginFrameRequest $request): BeginFrameResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'HeadlessExperimental.beginFrame', $request);
		return BeginFrameResponse::fromJson($response);
	}


	public function addNeedsBeginFramesChangedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('HeadlessExperimental.needsBeginFramesChanged', $listener);
	}


	public function awaitNeedsBeginFramesChanged(ContextInterface $ctx): NeedsBeginFramesChangedEvent
	{
		return NeedsBeginFramesChangedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'HeadlessExperimental.needsBeginFramesChanged'));
	}


	public function addMainFrameReadyForScreenshotsListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('HeadlessExperimental.mainFrameReadyForScreenshots', $listener);
	}


	public function awaitMainFrameReadyForScreenshots(ContextInterface $ctx): MainFrameReadyForScreenshotsEvent
	{
		return MainFrameReadyForScreenshotsEvent::fromJson($this->internalClient->awaitEvent($ctx, 'HeadlessExperimental.mainFrameReadyForScreenshots'));
	}
}
