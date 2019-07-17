<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Types of reasons why a cookie may not be sent with a request.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CookieBlockedReasonEnum
{
	const SECURE_ONLY = 'SecureOnly';
	const NOT_ON_PATH = 'NotOnPath';
	const DOMAIN_MISMATCH = 'DomainMismatch';
	const SAME_SITE_STRICT = 'SameSiteStrict';
	const SAME_SITE_LAX = 'SameSiteLax';
	const SAME_SITE_EXTENDED = 'SameSiteExtended';
	const SAME_SITE_UNSPECIFIED_TREATED_AS_LAX = 'SameSiteUnspecifiedTreatedAsLax';
	const SAME_SITE_NONE_INSECURE = 'SameSiteNoneInsecure';
	const USER_PREFERENCES = 'UserPreferences';
	const UNKNOWN_ERROR = 'UnknownError';
}
