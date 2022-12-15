<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * List of FinalStatus reasons for Prerender2.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PrerenderFinalStatusEnum
{
	public const ACTIVATED = 'Activated';
	public const DESTROYED = 'Destroyed';
	public const LOW_END_DEVICE = 'LowEndDevice';
	public const INVALID_SCHEME_REDIRECT = 'InvalidSchemeRedirect';
	public const INVALID_SCHEME_NAVIGATION = 'InvalidSchemeNavigation';
	public const IN_PROGRESS_NAVIGATION = 'InProgressNavigation';
	public const NAVIGATION_REQUEST_BLOCKED_BY_CSP = 'NavigationRequestBlockedByCsp';
	public const MAIN_FRAME_NAVIGATION = 'MainFrameNavigation';
	public const MOJO_BINDER_POLICY = 'MojoBinderPolicy';
	public const RENDERER_PROCESS_CRASHED = 'RendererProcessCrashed';
	public const RENDERER_PROCESS_KILLED = 'RendererProcessKilled';
	public const DOWNLOAD = 'Download';
	public const TRIGGER_DESTROYED = 'TriggerDestroyed';
	public const NAVIGATION_NOT_COMMITTED = 'NavigationNotCommitted';
	public const NAVIGATION_BAD_HTTP_STATUS = 'NavigationBadHttpStatus';
	public const CLIENT_CERT_REQUESTED = 'ClientCertRequested';
	public const NAVIGATION_REQUEST_NETWORK_ERROR = 'NavigationRequestNetworkError';
	public const MAX_NUM_OF_RUNNING_PRERENDERS_EXCEEDED = 'MaxNumOfRunningPrerendersExceeded';
	public const CANCEL_ALL_HOSTS_FOR_TESTING = 'CancelAllHostsForTesting';
	public const DID_FAIL_LOAD = 'DidFailLoad';
	public const STOP = 'Stop';
	public const SSL_CERTIFICATE_ERROR = 'SslCertificateError';
	public const LOGIN_AUTH_REQUESTED = 'LoginAuthRequested';
	public const UA_CHANGE_REQUIRES_RELOAD = 'UaChangeRequiresReload';
	public const BLOCKED_BY_CLIENT = 'BlockedByClient';
	public const AUDIO_OUTPUT_DEVICE_REQUESTED = 'AudioOutputDeviceRequested';
	public const MIXED_CONTENT = 'MixedContent';
	public const TRIGGER_BACKGROUNDED = 'TriggerBackgrounded';
	public const EMBEDDER_TRIGGERED_AND_CROSS_ORIGIN_REDIRECTED = 'EmbedderTriggeredAndCrossOriginRedirected';
	public const MEMORY_LIMIT_EXCEEDED = 'MemoryLimitExceeded';
	public const FAIL_TO_GET_MEMORY_USAGE = 'FailToGetMemoryUsage';
	public const DATA_SAVER_ENABLED = 'DataSaverEnabled';
	public const HAS_EFFECTIVE_URL = 'HasEffectiveUrl';
	public const ACTIVATED_BEFORE_STARTED = 'ActivatedBeforeStarted';
	public const INACTIVE_PAGE_RESTRICTION = 'InactivePageRestriction';
	public const START_FAILED = 'StartFailed';
	public const TIMEOUT_BACKGROUNDED = 'TimeoutBackgrounded';
	public const CROSS_SITE_REDIRECT = 'CrossSiteRedirect';
	public const CROSS_SITE_NAVIGATION = 'CrossSiteNavigation';
	public const SAME_SITE_CROSS_ORIGIN_REDIRECT = 'SameSiteCrossOriginRedirect';
	public const SAME_SITE_CROSS_ORIGIN_NAVIGATION = 'SameSiteCrossOriginNavigation';
	public const SAME_SITE_CROSS_ORIGIN_REDIRECT_NOT_OPT_IN = 'SameSiteCrossOriginRedirectNotOptIn';
	public const SAME_SITE_CROSS_ORIGIN_NAVIGATION_NOT_OPT_IN = 'SameSiteCrossOriginNavigationNotOptIn';
	public const ACTIVATION_NAVIGATION_PARAMETER_MISMATCH = 'ActivationNavigationParameterMismatch';
	public const ACTIVATED_IN_BACKGROUND = 'ActivatedInBackground';
	public const EMBEDDER_HOST_DISALLOWED = 'EmbedderHostDisallowed';
}
