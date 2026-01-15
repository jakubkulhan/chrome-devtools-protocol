<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Types of reasons why a cookie may not be stored from a response.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetCookieBlockedReasonEnum
{
	public const SECURE_ONLY = 'SecureOnly';
	public const SAME_SITE_STRICT = 'SameSiteStrict';
	public const SAME_SITE_LAX = 'SameSiteLax';
	public const SAME_SITE_UNSPECIFIED_TREATED_AS_LAX = 'SameSiteUnspecifiedTreatedAsLax';
	public const SAME_SITE_NONE_INSECURE = 'SameSiteNoneInsecure';
	public const USER_PREFERENCES = 'UserPreferences';
	public const THIRD_PARTY_PHASEOUT = 'ThirdPartyPhaseout';
	public const THIRD_PARTY_BLOCKED_IN_FIRST_PARTY_SET = 'ThirdPartyBlockedInFirstPartySet';
	public const SYNTAX_ERROR = 'SyntaxError';
	public const SCHEME_NOT_SUPPORTED = 'SchemeNotSupported';
	public const OVERWRITE_SECURE = 'OverwriteSecure';
	public const INVALID_DOMAIN = 'InvalidDomain';
	public const INVALID_PREFIX = 'InvalidPrefix';
	public const UNKNOWN_ERROR = 'UnknownError';
	public const SCHEMEFUL_SAME_SITE_STRICT = 'SchemefulSameSiteStrict';
	public const SCHEMEFUL_SAME_SITE_LAX = 'SchemefulSameSiteLax';
	public const SCHEMEFUL_SAME_SITE_UNSPECIFIED_TREATED_AS_LAX = 'SchemefulSameSiteUnspecifiedTreatedAsLax';
	public const NAME_VALUE_PAIR_EXCEEDS_MAX_SIZE = 'NameValuePairExceedsMaxSize';
	public const DISALLOWED_CHARACTER = 'DisallowedCharacter';
	public const NO_COOKIE_CONTENT = 'NoCookieContent';
}
