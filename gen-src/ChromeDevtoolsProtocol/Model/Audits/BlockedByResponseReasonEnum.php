<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Enum indicating the reason a response has been blocked. These reasons are refinements of the net error BLOCKED_BY_RESPONSE.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BlockedByResponseReasonEnum
{
	public const COEP_FRAME_RESOURCE_NEEDS_COEP_HEADER = 'CoepFrameResourceNeedsCoepHeader';
	public const COOP_SANDBOXED_I_FRAME_CANNOT_NAVIGATE_TO_COOP_PAGE = 'CoopSandboxedIFrameCannotNavigateToCoopPage';
	public const CORP_NOT_SAME_ORIGIN = 'CorpNotSameOrigin';
	public const CORP_NOT_SAME_ORIGIN_AFTER_DEFAULTED_TO_SAME_ORIGIN_BY_COEP = 'CorpNotSameOriginAfterDefaultedToSameOriginByCoep';
	public const CORP_NOT_SAME_ORIGIN_AFTER_DEFAULTED_TO_SAME_ORIGIN_BY_DIP = 'CorpNotSameOriginAfterDefaultedToSameOriginByDip';
	public const CORP_NOT_SAME_ORIGIN_AFTER_DEFAULTED_TO_SAME_ORIGIN_BY_COEP_AND_DIP = 'CorpNotSameOriginAfterDefaultedToSameOriginByCoepAndDip';
	public const CORP_NOT_SAME_SITE = 'CorpNotSameSite';
	public const SRI_MESSAGE_SIGNATURE_MISMATCH = 'SRIMessageSignatureMismatch';
}
