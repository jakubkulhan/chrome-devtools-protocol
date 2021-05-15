<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * The reason why request was blocked.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CorsErrorEnum
{
	const DISALLOWED_BY_MODE = 'DisallowedByMode';
	const INVALID_RESPONSE = 'InvalidResponse';
	const WILDCARD_ORIGIN_NOT_ALLOWED = 'WildcardOriginNotAllowed';
	const MISSING_ALLOW_ORIGIN_HEADER = 'MissingAllowOriginHeader';
	const MULTIPLE_ALLOW_ORIGIN_VALUES = 'MultipleAllowOriginValues';
	const INVALID_ALLOW_ORIGIN_VALUE = 'InvalidAllowOriginValue';
	const ALLOW_ORIGIN_MISMATCH = 'AllowOriginMismatch';
	const INVALID_ALLOW_CREDENTIALS = 'InvalidAllowCredentials';
	const CORS_DISABLED_SCHEME = 'CorsDisabledScheme';
	const PREFLIGHT_INVALID_STATUS = 'PreflightInvalidStatus';
	const PREFLIGHT_DISALLOWED_REDIRECT = 'PreflightDisallowedRedirect';
	const PREFLIGHT_WILDCARD_ORIGIN_NOT_ALLOWED = 'PreflightWildcardOriginNotAllowed';
	const PREFLIGHT_MISSING_ALLOW_ORIGIN_HEADER = 'PreflightMissingAllowOriginHeader';
	const PREFLIGHT_MULTIPLE_ALLOW_ORIGIN_VALUES = 'PreflightMultipleAllowOriginValues';
	const PREFLIGHT_INVALID_ALLOW_ORIGIN_VALUE = 'PreflightInvalidAllowOriginValue';
	const PREFLIGHT_ALLOW_ORIGIN_MISMATCH = 'PreflightAllowOriginMismatch';
	const PREFLIGHT_INVALID_ALLOW_CREDENTIALS = 'PreflightInvalidAllowCredentials';
	const PREFLIGHT_MISSING_ALLOW_EXTERNAL = 'PreflightMissingAllowExternal';
	const PREFLIGHT_INVALID_ALLOW_EXTERNAL = 'PreflightInvalidAllowExternal';
	const INVALID_ALLOW_METHODS_PREFLIGHT_RESPONSE = 'InvalidAllowMethodsPreflightResponse';
	const INVALID_ALLOW_HEADERS_PREFLIGHT_RESPONSE = 'InvalidAllowHeadersPreflightResponse';
	const METHOD_DISALLOWED_BY_PREFLIGHT_RESPONSE = 'MethodDisallowedByPreflightResponse';
	const HEADER_DISALLOWED_BY_PREFLIGHT_RESPONSE = 'HeaderDisallowedByPreflightResponse';
	const REDIRECT_CONTAINS_CREDENTIALS = 'RedirectContainsCredentials';
	const INSECURE_PRIVATE_NETWORK = 'InsecurePrivateNetwork';
	const NO_CORS_REDIRECT_MODE_NOT_FOLLOW = 'NoCorsRedirectModeNotFollow';
}
