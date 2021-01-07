<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\PerformanceTimeline\EnableRequest;
use ChromeDevtoolsProtocol\Model\PerformanceTimeline\TimelineEventAddedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class PerformanceTimelineDomain implements PerformanceTimelineDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function enable(ContextInterface $ctx, EnableRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'PerformanceTimeline.enable', $request);
	}


	public function addTimelineEventAddedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('PerformanceTimeline.timelineEventAdded', function ($event) use ($listener) {
			return $listener(TimelineEventAddedEvent::fromJson($event));
		});
	}


	public function awaitTimelineEventAdded(ContextInterface $ctx): TimelineEventAddedEvent
	{
		return TimelineEventAddedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'PerformanceTimeline.timelineEventAdded'));
	}
}
