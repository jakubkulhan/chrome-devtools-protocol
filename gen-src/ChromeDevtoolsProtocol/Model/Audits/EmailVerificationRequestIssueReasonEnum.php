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
	public const ACCOUNTS_HTTP_NOT_FOUND = 'AccountsHttpNotFound';
	public const ACCOUNTS_NO_RESPONSE = 'AccountsNoResponse';
	public const ACCOUNTS_INVALID_RESPONSE = 'AccountsInvalidResponse';
	public const ACCOUNTS_INVALID_CONTENT_TYPE = 'AccountsInvalidContentType';
	public const ACCOUNTS_EMPTY_LIST = 'AccountsEmptyList';
	public const EMAIL_VERIFICATION_WELL_KNOWN_HTTP_NOT_FOUND = 'EmailVerificationWellKnownHttpNotFound';
	public const EMAIL_VERIFICATION_WELL_KNOWN_NO_RESPONSE = 'EmailVerificationWellKnownNoResponse';
	public const EMAIL_VERIFICATION_WELL_KNOWN_INVALID_RESPONSE = 'EmailVerificationWellKnownInvalidResponse';
	public const EMAIL_VERIFICATION_WELL_KNOWN_INVALID_CONTENT_TYPE = 'EmailVerificationWellKnownInvalidContentType';
	public const JWKS_HTTP_NOT_FOUND = 'JwksHttpNotFound';
	public const JWKS_INVALID_RESPONSE = 'JwksInvalidResponse';
	public const TOKEN_VERIFICATION_SD_JWT_UNSUPPORTED_HEADER_ALG = 'TokenVerificationSdJwtUnsupportedHeaderAlg';
	public const TOKEN_VERIFICATION_SD_JWT_INVALID_TYP = 'TokenVerificationSdJwtInvalidTyp';
	public const TOKEN_VERIFICATION_SD_JWT_MISSING_ISS = 'TokenVerificationSdJwtMissingIss';
	public const TOKEN_VERIFICATION_SD_JWT_MISSING_IAT = 'TokenVerificationSdJwtMissingIat';
	public const TOKEN_VERIFICATION_SD_JWT_MISSING_CNF = 'TokenVerificationSdJwtMissingCnf';
	public const TOKEN_VERIFICATION_SD_JWT_MISSING_EMAIL = 'TokenVerificationSdJwtMissingEmail';
	public const TOKEN_VERIFICATION_SD_JWT_INVALID_ISSUED_AT = 'TokenVerificationSdJwtInvalidIssuedAt';
	public const TOKEN_VERIFICATION_SD_JWT_INVALID_ISSUER = 'TokenVerificationSdJwtInvalidIssuer';
	public const TOKEN_VERIFICATION_SD_JWT_JWKS_MISSING_KEYS = 'TokenVerificationSdJwtJwksMissingKeys';
	public const TOKEN_VERIFICATION_SD_JWT_SIGNATURE_FAILED = 'TokenVerificationSdJwtSignatureFailed';
	public const TOKEN_VERIFICATION_SD_JWT_INVALID_EMAIL_VERIFIED = 'TokenVerificationSdJwtInvalidEmailVerified';
	public const TOKEN_VERIFICATION_SD_JWT_INVALID_EMAIL = 'TokenVerificationSdJwtInvalidEmail';
	public const TOKEN_VERIFICATION_SD_JWT_INVALID_HOLDER_KEY = 'TokenVerificationSdJwtInvalidHolderKey';
	public const TOKEN_VERIFICATION_KB_INVALID_TYP = 'TokenVerificationKbInvalidTyp';
	public const TOKEN_VERIFICATION_KB_MISSING_AUD = 'TokenVerificationKbMissingAud';
	public const TOKEN_VERIFICATION_KB_MISSING_NONCE = 'TokenVerificationKbMissingNonce';
	public const TOKEN_VERIFICATION_KB_MISSING_IAT = 'TokenVerificationKbMissingIat';
	public const TOKEN_VERIFICATION_KB_MISSING_SD_HASH = 'TokenVerificationKbMissingSdHash';
	public const TOKEN_VERIFICATION_KB_INVALID_ISSUED_AT = 'TokenVerificationKbInvalidIssuedAt';
	public const TOKEN_VERIFICATION_KB_INVALID_AUDIENCE = 'TokenVerificationKbInvalidAudience';
	public const TOKEN_VERIFICATION_KB_INVALID_NONCE = 'TokenVerificationKbInvalidNonce';
	public const TOKEN_VERIFICATION_KB_INVALID_SD_HASH = 'TokenVerificationKbInvalidSdHash';
	public const TOKEN_VERIFICATION_KB_MISSING_CNF = 'TokenVerificationKbMissingCnf';
	public const TOKEN_VERIFICATION_KB_SIGNATURE_FAILED = 'TokenVerificationKbSignatureFailed';
}
