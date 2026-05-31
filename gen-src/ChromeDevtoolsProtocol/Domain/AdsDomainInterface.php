<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Ads\GetAdMetricsResponse;

/**
 * A domain for ad-related metrics and data.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface AdsDomainInterface
{
	/**
	 * Retrieves ad metrics for the current page.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetAdMetricsResponse
	 */
	public function getAdMetrics(ContextInterface $ctx): GetAdMetricsResponse;
}
