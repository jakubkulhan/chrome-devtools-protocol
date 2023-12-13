<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Values of named type Storage.AttributionReportingAggregatableResult.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingAggregatableResultEnum
{
	public const SUCCESS = 'success';
	public const INTERNAL_ERROR = 'internalError';
	public const NO_CAPACITY_FOR_ATTRIBUTION_DESTINATION = 'noCapacityForAttributionDestination';
	public const NO_MATCHING_SOURCES = 'noMatchingSources';
	public const EXCESSIVE_ATTRIBUTIONS = 'excessiveAttributions';
	public const EXCESSIVE_REPORTING_ORIGINS = 'excessiveReportingOrigins';
	public const NO_HISTOGRAMS = 'noHistograms';
	public const INSUFFICIENT_BUDGET = 'insufficientBudget';
	public const NO_MATCHING_SOURCE_FILTER_DATA = 'noMatchingSourceFilterData';
	public const NOT_REGISTERED = 'notRegistered';
	public const PROHIBITED_BY_BROWSER_POLICY = 'prohibitedByBrowserPolicy';
	public const DEDUPLICATED = 'deduplicated';
	public const REPORT_WINDOW_PASSED = 'reportWindowPassed';
	public const EXCESSIVE_REPORTS = 'excessiveReports';
}
