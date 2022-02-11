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
	public const DISALLOWED_BY_MODE = 'DisallowedByMode';
	public const INVALID_RESPONSE = 'InvalidResponse';
	public const WILDCARD_ORIGIN_NOT_ALLOWED = 'WildcardOriginNotAllowed';
	public const MISSING_ALLOW_ORIGIN_HEADER = 'MissingAllowOriginHeader';
	public const MULTIPLE_ALLOW_ORIGIN_VALUES = 'MultipleAllowOriginValues';
	public const INVALID_ALLOW_ORIGIN_VALUE = 'InvalidAllowOriginValue';
	public const ALLOW_ORIGIN_MISMATCH = 'AllowOriginMismatch';
	public const INVALID_ALLOW_CREDENTIALS = 'InvalidAllowCredentials';
	public const CORS_DISABLED_SCHEME = 'CorsDisabledScheme';
	public const PREFLIGHT_INVALID_STATUS = 'PreflightInvalidStatus';
	public const PREFLIGHT_DISALLOWED_REDIRECT = 'PreflightDisallowedRedirect';
	public const PREFLIGHT_WILDCARD_ORIGIN_NOT_ALLOWED = 'PreflightWildcardOriginNotAllowed';
	public const PREFLIGHT_MISSING_ALLOW_ORIGIN_HEADER = 'PreflightMissingAllowOriginHeader';
	public const PREFLIGHT_MULTIPLE_ALLOW_ORIGIN_VALUES = 'PreflightMultipleAllowOriginValues';
	public const PREFLIGHT_INVALID_ALLOW_ORIGIN_VALUE = 'PreflightInvalidAllowOriginValue';
	public const PREFLIGHT_ALLOW_ORIGIN_MISMATCH = 'PreflightAllowOriginMismatch';
	public const PREFLIGHT_INVALID_ALLOW_CREDENTIALS = 'PreflightInvalidAllowCredentials';
	public const PREFLIGHT_MISSING_ALLOW_EXTERNAL = 'PreflightMissingAllowExternal';
	public const PREFLIGHT_INVALID_ALLOW_EXTERNAL = 'PreflightInvalidAllowExternal';
	public const PREFLIGHT_MISSING_ALLOW_PRIVATE_NETWORK = 'PreflightMissingAllowPrivateNetwork';
	public const PREFLIGHT_INVALID_ALLOW_PRIVATE_NETWORK = 'PreflightInvalidAllowPrivateNetwork';
	public const INVALID_ALLOW_METHODS_PREFLIGHT_RESPONSE = 'InvalidAllowMethodsPreflightResponse';
	public const INVALID_ALLOW_HEADERS_PREFLIGHT_RESPONSE = 'InvalidAllowHeadersPreflightResponse';
	public const METHOD_DISALLOWED_BY_PREFLIGHT_RESPONSE = 'MethodDisallowedByPreflightResponse';
	public const HEADER_DISALLOWED_BY_PREFLIGHT_RESPONSE = 'HeaderDisallowedByPreflightResponse';
	public const REDIRECT_CONTAINS_CREDENTIALS = 'RedirectContainsCredentials';
	public const INSECURE_PRIVATE_NETWORK = 'InsecurePrivateNetwork';
	public const INVALID_PRIVATE_NETWORK_ACCESS = 'InvalidPrivateNetworkAccess';
	public const UNEXPECTED_PRIVATE_NETWORK_ACCESS = 'UnexpectedPrivateNetworkAccess';
	public const NO_CORS_REDIRECT_MODE_NOT_FOLLOW = 'NoCorsRedirectModeNotFollow';
}
