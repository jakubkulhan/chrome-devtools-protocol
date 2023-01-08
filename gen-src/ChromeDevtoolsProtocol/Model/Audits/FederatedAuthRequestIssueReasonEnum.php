<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Represents the failure reason when a federated authentication reason fails. Should be updated alongside RequestIdTokenStatus in third_party/blink/public/mojom/devtools/inspector_issue.mojom to include all cases except for success.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FederatedAuthRequestIssueReasonEnum
{
	public const SHOULD_EMBARGO = 'ShouldEmbargo';
	public const TOO_MANY_REQUESTS = 'TooManyRequests';
	public const WELL_KNOWN_HTTP_NOT_FOUND = 'WellKnownHttpNotFound';
	public const WELL_KNOWN_NO_RESPONSE = 'WellKnownNoResponse';
	public const WELL_KNOWN_INVALID_RESPONSE = 'WellKnownInvalidResponse';
	public const WELL_KNOWN_LIST_EMPTY = 'WellKnownListEmpty';
	public const CONFIG_NOT_IN_WELL_KNOWN = 'ConfigNotInWellKnown';
	public const WELL_KNOWN_TOO_BIG = 'WellKnownTooBig';
	public const CONFIG_HTTP_NOT_FOUND = 'ConfigHttpNotFound';
	public const CONFIG_NO_RESPONSE = 'ConfigNoResponse';
	public const CONFIG_INVALID_RESPONSE = 'ConfigInvalidResponse';
	public const CLIENT_METADATA_HTTP_NOT_FOUND = 'ClientMetadataHttpNotFound';
	public const CLIENT_METADATA_NO_RESPONSE = 'ClientMetadataNoResponse';
	public const CLIENT_METADATA_INVALID_RESPONSE = 'ClientMetadataInvalidResponse';
	public const DISABLED_IN_SETTINGS = 'DisabledInSettings';
	public const ERROR_FETCHING_SIGNIN = 'ErrorFetchingSignin';
	public const INVALID_SIGNIN_RESPONSE = 'InvalidSigninResponse';
	public const ACCOUNTS_HTTP_NOT_FOUND = 'AccountsHttpNotFound';
	public const ACCOUNTS_NO_RESPONSE = 'AccountsNoResponse';
	public const ACCOUNTS_INVALID_RESPONSE = 'AccountsInvalidResponse';
	public const ACCOUNTS_LIST_EMPTY = 'AccountsListEmpty';
	public const ID_TOKEN_HTTP_NOT_FOUND = 'IdTokenHttpNotFound';
	public const ID_TOKEN_NO_RESPONSE = 'IdTokenNoResponse';
	public const ID_TOKEN_INVALID_RESPONSE = 'IdTokenInvalidResponse';
	public const ID_TOKEN_INVALID_REQUEST = 'IdTokenInvalidRequest';
	public const ERROR_ID_TOKEN = 'ErrorIdToken';
	public const CANCELED = 'Canceled';
	public const RP_PAGE_NOT_VISIBLE = 'RpPageNotVisible';
}
