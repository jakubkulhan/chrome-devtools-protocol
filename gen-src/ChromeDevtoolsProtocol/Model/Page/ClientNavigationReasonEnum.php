<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Values of named type Page.ClientNavigationReason.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ClientNavigationReasonEnum
{
	public const ANCHOR_CLICK = 'anchorClick';
	public const FORM_SUBMISSION_GET = 'formSubmissionGet';
	public const FORM_SUBMISSION_POST = 'formSubmissionPost';
	public const HTTP_HEADER_REFRESH = 'httpHeaderRefresh';
	public const INITIAL_FRAME_NAVIGATION = 'initialFrameNavigation';
	public const META_TAG_REFRESH = 'metaTagRefresh';
	public const OTHER = 'other';
	public const PAGE_BLOCK_INTERSTITIAL = 'pageBlockInterstitial';
	public const RELOAD = 'reload';
	public const SCRIPT_INITIATED = 'scriptInitiated';
}
