<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Represents the failure reason when a getUserInfo() call fails. Should be updated alongside FederatedAuthUserInfoRequestResult in third_party/blink/public/mojom/devtools/inspector_issue.mojom.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FederatedAuthUserInfoRequestIssueReasonEnum
{
	public const NOT_SAME_ORIGIN = 'NotSameOrigin';
	public const NOT_IFRAME = 'NotIframe';
	public const NOT_POTENTIALLY_TRUSTWORTHY = 'NotPotentiallyTrustworthy';
	public const NO_API_PERMISSION = 'NoApiPermission';
	public const NOT_SIGNED_IN_WITH_IDP = 'NotSignedInWithIdp';
	public const NO_ACCOUNT_SHARING_PERMISSION = 'NoAccountSharingPermission';
	public const INVALID_CONFIG_OR_WELL_KNOWN = 'InvalidConfigOrWellKnown';
	public const INVALID_ACCOUNTS_RESPONSE = 'InvalidAccountsResponse';
	public const NO_RETURNING_USER_FROM_FETCHED_ACCOUNTS = 'NoReturningUserFromFetchedAccounts';
}
