<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Values of named type Audits.CookieExclusionReason.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CookieExclusionReasonEnum
{
	public const EXCLUDE_SAME_SITE_UNSPECIFIED_TREATED_AS_LAX = 'ExcludeSameSiteUnspecifiedTreatedAsLax';
	public const EXCLUDE_SAME_SITE_NONE_INSECURE = 'ExcludeSameSiteNoneInsecure';
	public const EXCLUDE_SAME_SITE_LAX = 'ExcludeSameSiteLax';
	public const EXCLUDE_SAME_SITE_STRICT = 'ExcludeSameSiteStrict';
	public const EXCLUDE_INVALID_SAME_PARTY = 'ExcludeInvalidSameParty';
	public const EXCLUDE_SAME_PARTY_CROSS_PARTY_CONTEXT = 'ExcludeSamePartyCrossPartyContext';
	public const EXCLUDE_DOMAIN_NON_A_S_C_I_I = 'ExcludeDomainNonASCII';
	public const EXCLUDE_THIRD_PARTY_COOKIE_BLOCKED_IN_FIRST_PARTY_SET = 'ExcludeThirdPartyCookieBlockedInFirstPartySet';
}
