<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Values of named type Storage.AttributionReportingEventLevelResult.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingEventLevelResultEnum
{
	public const SUCCESS = 'success';
	public const SUCCESS_DROPPED_LOWER_PRIORITY = 'successDroppedLowerPriority';
	public const INTERNAL_ERROR = 'internalError';
	public const NO_CAPACITY_FOR_ATTRIBUTION_DESTINATION = 'noCapacityForAttributionDestination';
	public const NO_MATCHING_SOURCES = 'noMatchingSources';
	public const DEDUPLICATED = 'deduplicated';
	public const EXCESSIVE_ATTRIBUTIONS = 'excessiveAttributions';
	public const PRIORITY_TOO_LOW = 'priorityTooLow';
	public const NEVER_ATTRIBUTED_SOURCE = 'neverAttributedSource';
	public const EXCESSIVE_REPORTING_ORIGINS = 'excessiveReportingOrigins';
	public const NO_MATCHING_SOURCE_FILTER_DATA = 'noMatchingSourceFilterData';
	public const PROHIBITED_BY_BROWSER_POLICY = 'prohibitedByBrowserPolicy';
	public const NO_MATCHING_CONFIGURATIONS = 'noMatchingConfigurations';
	public const EXCESSIVE_REPORTS = 'excessiveReports';
	public const FALSELY_ATTRIBUTED_SOURCE = 'falselyAttributedSource';
	public const REPORT_WINDOW_PASSED = 'reportWindowPassed';
	public const NOT_REGISTERED = 'notRegistered';
	public const REPORT_WINDOW_NOT_STARTED = 'reportWindowNotStarted';
	public const NO_MATCHING_TRIGGER_DATA = 'noMatchingTriggerData';
}
