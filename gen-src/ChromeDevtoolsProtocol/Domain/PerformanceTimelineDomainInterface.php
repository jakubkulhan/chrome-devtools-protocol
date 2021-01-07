<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\PerformanceTimeline\EnableRequest;
use ChromeDevtoolsProtocol\Model\PerformanceTimeline\TimelineEventAddedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * Reporting of performance timeline events, as specified in https://w3c.github.io/performance-timeline/#dom-performanceobserver.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface PerformanceTimelineDomainInterface
{
	/**
	 * Previously buffered events would be reported before method returns. See also: timelineEventAdded
	 *
	 * @param ContextInterface $ctx
	 * @param EnableRequest $request
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx, EnableRequest $request): void;


	/**
	 * Sent when a performance timeline event is added. See reportPerformanceTimeline method.
	 *
	 * Listener will be called whenever event PerformanceTimeline.timelineEventAdded is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addTimelineEventAddedListener(callable $listener): SubscriptionInterface;


	/**
	 * Sent when a performance timeline event is added. See reportPerformanceTimeline method.
	 *
	 * Method will block until first PerformanceTimeline.timelineEventAdded event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return TimelineEventAddedEvent
	 */
	public function awaitTimelineEventAdded(ContextInterface $ctx): TimelineEventAddedEvent;
}
