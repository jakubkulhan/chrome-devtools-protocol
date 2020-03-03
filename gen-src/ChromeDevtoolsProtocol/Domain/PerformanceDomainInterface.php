<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Performance\EnableRequest;
use ChromeDevtoolsProtocol\Model\Performance\GetMetricsResponse;
use ChromeDevtoolsProtocol\Model\Performance\MetricsEvent;
use ChromeDevtoolsProtocol\Model\Performance\SetTimeDomainRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * Performance domain.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface PerformanceDomainInterface
{
	/**
	 * Disable collecting and reporting metrics.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enable collecting and reporting metrics.
	 *
	 * @param ContextInterface $ctx
	 * @param EnableRequest $request
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx, EnableRequest $request): void;


	/**
	 * Retrieve current values of run-time metrics.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetMetricsResponse
	 */
	public function getMetrics(ContextInterface $ctx): GetMetricsResponse;


	/**
	 * Sets time domain to use for collecting and reporting duration metrics. Note that this must be called before enabling metrics collection. Calling this method while metrics collection is enabled returns an error.
	 *
	 * @param ContextInterface $ctx
	 * @param SetTimeDomainRequest $request
	 *
	 * @return void
	 */
	public function setTimeDomain(ContextInterface $ctx, SetTimeDomainRequest $request): void;


	/**
	 * Current values of the metrics.
	 *
	 * Listener will be called whenever event Performance.metrics is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addMetricsListener(callable $listener): SubscriptionInterface;


	/**
	 * Current values of the metrics.
	 *
	 * Method will block until first Performance.metrics event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return MetricsEvent
	 */
	public function awaitMetrics(ContextInterface $ctx): MetricsEvent;
}
