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
	const SAME_SITE_COOKIE_ISSUE = 'SameSiteCookieIssue';
	const MIXED_CONTENT_ISSUE = 'MixedContentIssue';
	const BLOCKED_BY_RESPONSE_ISSUE = 'BlockedByResponseIssue';
	const HEAVY_AD_ISSUE = 'HeavyAdIssue';
	const CONTENT_SECURITY_POLICY_ISSUE = 'ContentSecurityPolicyIssue';
	const SHARED_ARRAY_BUFFER_TRANSFER_ISSUE = 'SharedArrayBufferTransferIssue';
}
