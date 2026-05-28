<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Represents the failure reason when an email verification request fails. Should be updated alongside EmailVerificationRequestResult in third_party/blink/public/mojom/devtools/inspector_issue.mojom.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EmailVerificationRequestIssueReasonEnum
{
	public const INVALID_EMAIL = 'InvalidEmail';
	public const DNS_FETCH_FAILED = 'DnsFetchFailed';
	public const DNS_INVALID_RECORD = 'DnsInvalidRecord';
	public const WELL_KNOWN_HTTP_NOT_FOUND = 'WellKnownHttpNotFound';
	public const WELL_KNOWN_NO_RESPONSE = 'WellKnownNoResponse';
	public const WELL_KNOWN_INVALID_RESPONSE = 'WellKnownInvalidResponse';
	public const WELL_KNOWN_LIST_EMPTY = 'WellKnownListEmpty';
	public const WELL_KNOWN_INVALID_CONTENT_TYPE = 'WellKnownInvalidContentType';
	public const WELL_KNOWN_MISSING_ISSUANCE_ENDPOINT = 'WellKnownMissingIssuanceEndpoint';
	public const WELL_KNOWN_ISSUANCE_ENDPOINT_CROSS_ORIGIN = 'WellKnownIssuanceEndpointCrossOrigin';
	public const WELL_KNOWN_UNSUPPORTED_SIGNING_ALGORITHM = 'WellKnownUnsupportedSigningAlgorithm';
	public const TOKEN_HTTP_NOT_FOUND = 'TokenHttpNotFound';
	public const TOKEN_NO_RESPONSE = 'TokenNoResponse';
	public const TOKEN_INVALID_RESPONSE = 'TokenInvalidResponse';
	public const TOKEN_INVALID_CONTENT_TYPE = 'TokenInvalidContentType';
	public const TOKEN_MALFORMED_SD_JWT = 'TokenMalformedSdJwt';
	public const TOKEN_INVALID_SD_JWT = 'TokenInvalidSdJwt';
	public const KEY_BINDING_SIGNING_FAILED = 'KeyBindingSigningFailed';
	public const RP_ORIGIN_IS_OPAQUE = 'RpOriginIsOpaque';
	public const WELL_KNOWN_MISSING_ACCOUNTS_ENDPOINT = 'WellKnownMissingAccountsEndpoint';
	public const USER_LOGGED_OUT = 'UserLoggedOut';
	public const WELL_KNOWN_ACCOUNTS_ENDPOINT_CROSS_ORIGIN = 'WellKnownAccountsEndpointCrossOrigin';
}
