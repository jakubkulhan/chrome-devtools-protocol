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
	const OTHER = 'other';
	const CSP = 'csp';
	const MIXED_CONTENT = 'mixed-content';
	const ORIGIN = 'origin';
	const INSPECTOR = 'inspector';
	const SUBRESOURCE_FILTER = 'subresource-filter';
	const CONTENT_TYPE = 'content-type';
	const COLLAPSED_BY_CLIENT = 'collapsed-by-client';
	const COEP_FRAME_RESOURCE_NEEDS_COEP_HEADER = 'coep-frame-resource-needs-coep-header';
	const COOP_SANDBOXED_IFRAME_CANNOT_NAVIGATE_TO_COOP_PAGE = 'coop-sandboxed-iframe-cannot-navigate-to-coop-page';
	const CORP_NOT_SAME_ORIGIN = 'corp-not-same-origin';
	const CORP_NOT_SAME_ORIGIN_AFTER_DEFAULTED_TO_SAME_ORIGIN_BY_COEP = 'corp-not-same-origin-after-defaulted-to-same-origin-by-coep';
	const CORP_NOT_SAME_SITE = 'corp-not-same-site';
}
