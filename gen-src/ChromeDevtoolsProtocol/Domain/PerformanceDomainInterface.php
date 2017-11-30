<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Performance\GetMetricsResponse;
use ChromeDevtoolsProtocol\Model\Performance\MetricsEvent;
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
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Retrieve current values of run-time metrics.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetMetricsResponse
	 */
	public function getMetrics(ContextInterface $ctx): GetMetricsResponse;


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
