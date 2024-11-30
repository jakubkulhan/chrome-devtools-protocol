<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * The reason why request was blocked.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BlockedReasonEnum
{
	public const OTHER = 'other';
	public const CSP = 'csp';
	public const MIXED_CONTENT = 'mixed-content';
	public const ORIGIN = 'origin';
	public const INSPECTOR = 'inspector';
	public const SUBRESOURCE_FILTER = 'subresource-filter';
	public const CONTENT_TYPE = 'content-type';
	public const COEP_FRAME_RESOURCE_NEEDS_COEP_HEADER = 'coep-frame-resource-needs-coep-header';
	public const COOP_SANDBOXED_IFRAME_CANNOT_NAVIGATE_TO_COOP_PAGE = 'coop-sandboxed-iframe-cannot-navigate-to-coop-page';
	public const CORP_NOT_SAME_ORIGIN = 'corp-not-same-origin';
	public const CORP_NOT_SAME_ORIGIN_AFTER_DEFAULTED_TO_SAME_ORIGIN_BY_COEP = 'corp-not-same-origin-after-defaulted-to-same-origin-by-coep';
	public const CORP_NOT_SAME_ORIGIN_AFTER_DEFAULTED_TO_SAME_ORIGIN_BY_DIP = 'corp-not-same-origin-after-defaulted-to-same-origin-by-dip';
	public const CORP_NOT_SAME_ORIGIN_AFTER_DEFAULTED_TO_SAME_ORIGIN_BY_COEP_AND_DIP = 'corp-not-same-origin-after-defaulted-to-same-origin-by-coep-and-dip';
	public const CORP_NOT_SAME_SITE = 'corp-not-same-site';
	public const SRI_MESSAGE_SIGNATURE_MISMATCH = 'sri-message-signature-mismatch';
}
