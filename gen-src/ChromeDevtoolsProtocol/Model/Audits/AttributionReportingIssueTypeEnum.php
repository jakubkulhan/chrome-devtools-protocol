<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Values of named type Audits.AttributionReportingIssueType.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingIssueTypeEnum
{
	public const PERMISSION_POLICY_DISABLED = 'PermissionPolicyDisabled';
	public const UNTRUSTWORTHY_REPORTING_ORIGIN = 'UntrustworthyReportingOrigin';
	public const INSECURE_CONTEXT = 'InsecureContext';
	public const INVALID_HEADER = 'InvalidHeader';
	public const INVALID_REGISTER_TRIGGER_HEADER = 'InvalidRegisterTriggerHeader';
	public const INVALID_ELIGIBLE_HEADER = 'InvalidEligibleHeader';
	public const TOO_MANY_CONCURRENT_REQUESTS = 'TooManyConcurrentRequests';
	public const SOURCE_AND_TRIGGER_HEADERS = 'SourceAndTriggerHeaders';
	public const SOURCE_IGNORED = 'SourceIgnored';
	public const TRIGGER_IGNORED = 'TriggerIgnored';
	public const OS_SOURCE_IGNORED = 'OsSourceIgnored';
	public const OS_TRIGGER_IGNORED = 'OsTriggerIgnored';
	public const INVALID_REGISTER_OS_SOURCE_HEADER = 'InvalidRegisterOsSourceHeader';
	public const INVALID_REGISTER_OS_TRIGGER_HEADER = 'InvalidRegisterOsTriggerHeader';
	public const WEB_AND_OS_HEADERS = 'WebAndOsHeaders';
}
