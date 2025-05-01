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
	public const LOW_TEXT_CONTRAST_ISSUE = 'LowTextContrastIssue';
	public const CORS_ISSUE = 'CorsIssue';
	public const ATTRIBUTION_REPORTING_ISSUE = 'AttributionReportingIssue';
	public const QUIRKS_MODE_ISSUE = 'QuirksModeIssue';
	public const PARTITIONING_BLOB_U_R_L_ISSUE = 'PartitioningBlobURLIssue';
	public const NAVIGATOR_USER_AGENT_ISSUE = 'NavigatorUserAgentIssue';
	public const GENERIC_ISSUE = 'GenericIssue';
	public const DEPRECATION_ISSUE = 'DeprecationIssue';
	public const CLIENT_HINT_ISSUE = 'ClientHintIssue';
	public const FEDERATED_AUTH_REQUEST_ISSUE = 'FederatedAuthRequestIssue';
	public const BOUNCE_TRACKING_ISSUE = 'BounceTrackingIssue';
	public const COOKIE_DEPRECATION_METADATA_ISSUE = 'CookieDeprecationMetadataIssue';
	public const STYLESHEET_LOADING_ISSUE = 'StylesheetLoadingIssue';
	public const FEDERATED_AUTH_USER_INFO_REQUEST_ISSUE = 'FederatedAuthUserInfoRequestIssue';
	public const PROPERTY_RULE_ISSUE = 'PropertyRuleIssue';
	public const SHARED_DICTIONARY_ISSUE = 'SharedDictionaryIssue';
	public const SELECT_ELEMENT_ACCESSIBILITY_ISSUE = 'SelectElementAccessibilityIssue';
	public const SRI_MESSAGE_SIGNATURE_ISSUE = 'SRIMessageSignatureIssue';
	public const USER_REIDENTIFICATION_ISSUE = 'UserReidentificationIssue';
}
