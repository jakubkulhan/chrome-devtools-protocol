<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * A fetch result for a device bound session creation or refresh.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeviceBoundSessionFetchResultEnum
{
	public const SUCCESS = 'Success';
	public const KEY_ERROR = 'KeyError';
	public const SIGNING_ERROR = 'SigningError';
	public const SERVER_REQUESTED_TERMINATION = 'ServerRequestedTermination';
	public const INVALID_SESSION_ID = 'InvalidSessionId';
	public const INVALID_CHALLENGE = 'InvalidChallenge';
	public const TOO_MANY_CHALLENGES = 'TooManyChallenges';
	public const INVALID_FETCHER_URL = 'InvalidFetcherUrl';
	public const INVALID_REFRESH_URL = 'InvalidRefreshUrl';
	public const TRANSIENT_HTTP_ERROR = 'TransientHttpError';
	public const SCOPE_ORIGIN_SAME_SITE_MISMATCH = 'ScopeOriginSameSiteMismatch';
	public const REFRESH_URL_SAME_SITE_MISMATCH = 'RefreshUrlSameSiteMismatch';
	public const MISMATCHED_SESSION_ID = 'MismatchedSessionId';
	public const MISSING_SCOPE = 'MissingScope';
	public const NO_CREDENTIALS = 'NoCredentials';
	public const SUBDOMAIN_REGISTRATION_WELL_KNOWN_UNAVAILABLE = 'SubdomainRegistrationWellKnownUnavailable';
	public const SUBDOMAIN_REGISTRATION_UNAUTHORIZED = 'SubdomainRegistrationUnauthorized';
	public const SUBDOMAIN_REGISTRATION_WELL_KNOWN_MALFORMED = 'SubdomainRegistrationWellKnownMalformed';
	public const SESSION_PROVIDER_WELL_KNOWN_UNAVAILABLE = 'SessionProviderWellKnownUnavailable';
	public const RELYING_PARTY_WELL_KNOWN_UNAVAILABLE = 'RelyingPartyWellKnownUnavailable';
	public const FEDERATED_KEY_THUMBPRINT_MISMATCH = 'FederatedKeyThumbprintMismatch';
	public const INVALID_FEDERATED_SESSION_URL = 'InvalidFederatedSessionUrl';
	public const INVALID_FEDERATED_KEY = 'InvalidFederatedKey';
	public const TOO_MANY_RELYING_ORIGIN_LABELS = 'TooManyRelyingOriginLabels';
	public const BOUND_COOKIE_SET_FORBIDDEN = 'BoundCookieSetForbidden';
	public const NET_ERROR = 'NetError';
	public const PROXY_ERROR = 'ProxyError';
	public const EMPTY_SESSION_CONFIG = 'EmptySessionConfig';
	public const INVALID_CREDENTIALS_CONFIG = 'InvalidCredentialsConfig';
	public const INVALID_CREDENTIALS_TYPE = 'InvalidCredentialsType';
	public const INVALID_CREDENTIALS_EMPTY_NAME = 'InvalidCredentialsEmptyName';
	public const INVALID_CREDENTIALS_COOKIE = 'InvalidCredentialsCookie';
	public const PERSISTENT_HTTP_ERROR = 'PersistentHttpError';
	public const REGISTRATION_ATTEMPTED_CHALLENGE = 'RegistrationAttemptedChallenge';
	public const INVALID_SCOPE_ORIGIN = 'InvalidScopeOrigin';
	public const SCOPE_ORIGIN_CONTAINS_PATH = 'ScopeOriginContainsPath';
	public const REFRESH_INITIATOR_NOT_STRING = 'RefreshInitiatorNotString';
	public const REFRESH_INITIATOR_INVALID_HOST_PATTERN = 'RefreshInitiatorInvalidHostPattern';
	public const INVALID_SCOPE_SPECIFICATION = 'InvalidScopeSpecification';
	public const MISSING_SCOPE_SPECIFICATION_TYPE = 'MissingScopeSpecificationType';
	public const EMPTY_SCOPE_SPECIFICATION_DOMAIN = 'EmptyScopeSpecificationDomain';
	public const EMPTY_SCOPE_SPECIFICATION_PATH = 'EmptyScopeSpecificationPath';
	public const INVALID_SCOPE_SPECIFICATION_TYPE = 'InvalidScopeSpecificationType';
	public const INVALID_SCOPE_INCLUDE_SITE = 'InvalidScopeIncludeSite';
	public const MISSING_SCOPE_INCLUDE_SITE = 'MissingScopeIncludeSite';
	public const FEDERATED_NOT_AUTHORIZED_BY_PROVIDER = 'FederatedNotAuthorizedByProvider';
	public const FEDERATED_NOT_AUTHORIZED_BY_RELYING_PARTY = 'FederatedNotAuthorizedByRelyingParty';
	public const SESSION_PROVIDER_WELL_KNOWN_MALFORMED = 'SessionProviderWellKnownMalformed';
	public const SESSION_PROVIDER_WELL_KNOWN_HAS_PROVIDER_ORIGIN = 'SessionProviderWellKnownHasProviderOrigin';
	public const RELYING_PARTY_WELL_KNOWN_MALFORMED = 'RelyingPartyWellKnownMalformed';
	public const RELYING_PARTY_WELL_KNOWN_HAS_RELYING_ORIGINS = 'RelyingPartyWellKnownHasRelyingOrigins';
	public const INVALID_FEDERATED_SESSION_PROVIDER_SESSION_MISSING = 'InvalidFederatedSessionProviderSessionMissing';
	public const INVALID_FEDERATED_SESSION_WRONG_PROVIDER_ORIGIN = 'InvalidFederatedSessionWrongProviderOrigin';
	public const INVALID_CREDENTIALS_COOKIE_CREATION_TIME = 'InvalidCredentialsCookieCreationTime';
	public const INVALID_CREDENTIALS_COOKIE_NAME = 'InvalidCredentialsCookieName';
	public const INVALID_CREDENTIALS_COOKIE_PARSING = 'InvalidCredentialsCookieParsing';
	public const INVALID_CREDENTIALS_COOKIE_UNPERMITTED_ATTRIBUTE = 'InvalidCredentialsCookieUnpermittedAttribute';
	public const INVALID_CREDENTIALS_COOKIE_INVALID_DOMAIN = 'InvalidCredentialsCookieInvalidDomain';
	public const INVALID_CREDENTIALS_COOKIE_PREFIX = 'InvalidCredentialsCookiePrefix';
	public const INVALID_SCOPE_RULE_PATH = 'InvalidScopeRulePath';
	public const INVALID_SCOPE_RULE_HOST_PATTERN = 'InvalidScopeRuleHostPattern';
	public const SCOPE_RULE_ORIGIN_SCOPED_HOST_PATTERN_MISMATCH = 'ScopeRuleOriginScopedHostPatternMismatch';
	public const SCOPE_RULE_SITE_SCOPED_HOST_PATTERN_MISMATCH = 'ScopeRuleSiteScopedHostPatternMismatch';
	public const SIGNING_QUOTA_EXCEEDED = 'SigningQuotaExceeded';
	public const INVALID_CONFIG_JSON = 'InvalidConfigJson';
	public const INVALID_FEDERATED_SESSION_PROVIDER_FAILED_TO_RESTORE_KEY = 'InvalidFederatedSessionProviderFailedToRestoreKey';
	public const FAILED_TO_UNWRAP_KEY = 'FailedToUnwrapKey';
	public const SESSION_DELETED_DURING_REFRESH = 'SessionDeletedDuringRefresh';
}
