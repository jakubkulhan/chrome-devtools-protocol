<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * A unique identifier for the type of issue. Each type may use one of the optional fields in InspectorIssueDetails to convey more specific information about the kind of issue.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InspectorIssueCodeEnum
{
	public const COOKIE_ISSUE = 'CookieIssue';
	public const MIXED_CONTENT_ISSUE = 'MixedContentIssue';
	public const BLOCKED_BY_RESPONSE_ISSUE = 'BlockedByResponseIssue';
	public const HEAVY_AD_ISSUE = 'HeavyAdIssue';
	public const CONTENT_SECURITY_POLICY_ISSUE = 'ContentSecurityPolicyIssue';
	public const SHARED_ARRAY_BUFFER_ISSUE = 'SharedArrayBufferIssue';
	public const TRUSTED_WEB_ACTIVITY_ISSUE = 'TrustedWebActivityIssue';
	public const LOW_TEXT_CONTRAST_ISSUE = 'LowTextContrastIssue';
	public const CORS_ISSUE = 'CorsIssue';
	public const ATTRIBUTION_REPORTING_ISSUE = 'AttributionReportingIssue';
	public const QUIRKS_MODE_ISSUE = 'QuirksModeIssue';
	public const NAVIGATOR_USER_AGENT_ISSUE = 'NavigatorUserAgentIssue';
	public const GENERIC_ISSUE = 'GenericIssue';
	public const DEPRECATION_ISSUE = 'DeprecationIssue';
	public const CLIENT_HINT_ISSUE = 'ClientHintIssue';
	public const FEDERATED_AUTH_REQUEST_ISSUE = 'FederatedAuthRequestIssue';
}
