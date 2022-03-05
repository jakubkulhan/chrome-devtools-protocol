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
	public const APPROVAL_DECLINED = 'ApprovalDeclined';
	public const TOO_MANY_REQUESTS = 'TooManyRequests';
	public const MANIFEST_HTTP_NOT_FOUND = 'ManifestHttpNotFound';
	public const MANIFEST_NO_RESPONSE = 'ManifestNoResponse';
	public const MANIFEST_INVALID_RESPONSE = 'ManifestInvalidResponse';
	public const CLIENT_METADATA_HTTP_NOT_FOUND = 'ClientMetadataHttpNotFound';
	public const CLIENT_METADATA_NO_RESPONSE = 'ClientMetadataNoResponse';
	public const CLIENT_METADATA_INVALID_RESPONSE = 'ClientMetadataInvalidResponse';
	public const CLIENT_METADATA_MISSING_PRIVACY_POLICY_URL = 'ClientMetadataMissingPrivacyPolicyUrl';
	public const ERROR_FETCHING_SIGNIN = 'ErrorFetchingSignin';
	public const INVALID_SIGNIN_RESPONSE = 'InvalidSigninResponse';
	public const ACCOUNTS_HTTP_NOT_FOUND = 'AccountsHttpNotFound';
	public const ACCOUNTS_NO_RESPONSE = 'AccountsNoResponse';
	public const ACCOUNTS_INVALID_RESPONSE = 'AccountsInvalidResponse';
	public const ID_TOKEN_HTTP_NOT_FOUND = 'IdTokenHttpNotFound';
	public const ID_TOKEN_NO_RESPONSE = 'IdTokenNoResponse';
	public const ID_TOKEN_INVALID_RESPONSE = 'IdTokenInvalidResponse';
	public const ID_TOKEN_INVALID_REQUEST = 'IdTokenInvalidRequest';
	public const ERROR_ID_TOKEN = 'ErrorIdToken';
	public const CANCELED = 'Canceled';
}
