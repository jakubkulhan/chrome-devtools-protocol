<?php

namespace ChromeDevtoolsProtocol\Model\Preload;

/**
 * TODO(https://crbug.com/1384419): revisit the list of PrefetchStatus and filter out the ones that aren't necessary to the developers.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PrefetchStatusEnum
{
	public const PREFETCH_ALLOWED = 'PrefetchAllowed';
	public const PREFETCH_FAILED_INELIGIBLE_REDIRECT = 'PrefetchFailedIneligibleRedirect';
	public const PREFETCH_FAILED_INVALID_REDIRECT = 'PrefetchFailedInvalidRedirect';
	public const PREFETCH_FAILED_M_I_M_E_NOT_SUPPORTED = 'PrefetchFailedMIMENotSupported';
	public const PREFETCH_FAILED_NET_ERROR = 'PrefetchFailedNetError';
	public const PREFETCH_FAILED_NON2_X_X = 'PrefetchFailedNon2XX';
	public const PREFETCH_FAILED_PER_PAGE_LIMIT_EXCEEDED = 'PrefetchFailedPerPageLimitExceeded';
	public const PREFETCH_HELDBACK = 'PrefetchHeldback';
	public const PREFETCH_INELIGIBLE_RETRY_AFTER = 'PrefetchIneligibleRetryAfter';
	public const PREFETCH_IS_PRIVACY_DECOY = 'PrefetchIsPrivacyDecoy';
	public const PREFETCH_IS_STALE = 'PrefetchIsStale';
	public const PREFETCH_NOT_ELIGIBLE_BROWSER_CONTEXT_OFF_THE_RECORD = 'PrefetchNotEligibleBrowserContextOffTheRecord';
	public const PREFETCH_NOT_ELIGIBLE_DATA_SAVER_ENABLED = 'PrefetchNotEligibleDataSaverEnabled';
	public const PREFETCH_NOT_ELIGIBLE_EXISTING_PROXY = 'PrefetchNotEligibleExistingProxy';
	public const PREFETCH_NOT_ELIGIBLE_HOST_IS_NON_UNIQUE = 'PrefetchNotEligibleHostIsNonUnique';
	public const PREFETCH_NOT_ELIGIBLE_NON_DEFAULT_STORAGE_PARTITION = 'PrefetchNotEligibleNonDefaultStoragePartition';
	public const PREFETCH_NOT_ELIGIBLE_SAME_SITE_CROSS_ORIGIN_PREFETCH_REQUIRED_PROXY = 'PrefetchNotEligibleSameSiteCrossOriginPrefetchRequiredProxy';
	public const PREFETCH_NOT_ELIGIBLE_SCHEME_IS_NOT_HTTPS = 'PrefetchNotEligibleSchemeIsNotHttps';
	public const PREFETCH_NOT_ELIGIBLE_USER_HAS_COOKIES = 'PrefetchNotEligibleUserHasCookies';
	public const PREFETCH_NOT_ELIGIBLE_USER_HAS_SERVICE_WORKER = 'PrefetchNotEligibleUserHasServiceWorker';
	public const PREFETCH_NOT_ELIGIBLE_BATTERY_SAVER_ENABLED = 'PrefetchNotEligibleBatterySaverEnabled';
	public const PREFETCH_NOT_ELIGIBLE_PRELOADING_DISABLED = 'PrefetchNotEligiblePreloadingDisabled';
	public const PREFETCH_NOT_FINISHED_IN_TIME = 'PrefetchNotFinishedInTime';
	public const PREFETCH_NOT_STARTED = 'PrefetchNotStarted';
	public const PREFETCH_NOT_USED_COOKIES_CHANGED = 'PrefetchNotUsedCookiesChanged';
	public const PREFETCH_PROXY_NOT_AVAILABLE = 'PrefetchProxyNotAvailable';
	public const PREFETCH_RESPONSE_USED = 'PrefetchResponseUsed';
	public const PREFETCH_SUCCESSFUL_BUT_NOT_USED = 'PrefetchSuccessfulButNotUsed';
	public const PREFETCH_NOT_USED_PROBE_FAILED = 'PrefetchNotUsedProbeFailed';
}
