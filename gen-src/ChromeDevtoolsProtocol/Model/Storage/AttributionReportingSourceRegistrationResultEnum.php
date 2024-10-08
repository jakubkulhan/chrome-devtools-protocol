<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Values of named type Storage.AttributionReportingSourceRegistrationResult.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingSourceRegistrationResultEnum
{
	public const SUCCESS = 'success';
	public const INTERNAL_ERROR = 'internalError';
	public const INSUFFICIENT_SOURCE_CAPACITY = 'insufficientSourceCapacity';
	public const INSUFFICIENT_UNIQUE_DESTINATION_CAPACITY = 'insufficientUniqueDestinationCapacity';
	public const EXCESSIVE_REPORTING_ORIGINS = 'excessiveReportingOrigins';
	public const PROHIBITED_BY_BROWSER_POLICY = 'prohibitedByBrowserPolicy';
	public const SUCCESS_NOISED = 'successNoised';
	public const DESTINATION_REPORTING_LIMIT_REACHED = 'destinationReportingLimitReached';
	public const DESTINATION_GLOBAL_LIMIT_REACHED = 'destinationGlobalLimitReached';
	public const DESTINATION_BOTH_LIMITS_REACHED = 'destinationBothLimitsReached';
	public const REPORTING_ORIGINS_PER_SITE_LIMIT_REACHED = 'reportingOriginsPerSiteLimitReached';
	public const EXCEEDS_MAX_CHANNEL_CAPACITY = 'exceedsMaxChannelCapacity';
	public const EXCEEDS_MAX_SCOPES_CHANNEL_CAPACITY = 'exceedsMaxScopesChannelCapacity';
	public const EXCEEDS_MAX_TRIGGER_STATE_CARDINALITY = 'exceedsMaxTriggerStateCardinality';
	public const EXCEEDS_MAX_EVENT_STATES_LIMIT = 'exceedsMaxEventStatesLimit';
	public const DESTINATION_PER_DAY_REPORTING_LIMIT_REACHED = 'destinationPerDayReportingLimitReached';
}
