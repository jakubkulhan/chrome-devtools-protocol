<?php

namespace ChromeDevtoolsProtocol\Model\Preload;

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
	public const NAVIGATION_REQUEST_BLOCKED_BY_CSP = 'NavigationRequestBlockedByCsp';
	public const MOJO_BINDER_POLICY = 'MojoBinderPolicy';
	public const RENDERER_PROCESS_CRASHED = 'RendererProcessCrashed';
	public const RENDERER_PROCESS_KILLED = 'RendererProcessKilled';
	public const DOWNLOAD = 'Download';
	public const TRIGGER_DESTROYED = 'TriggerDestroyed';
	public const NAVIGATION_NOT_COMMITTED = 'NavigationNotCommitted';
	public const NAVIGATION_BAD_HTTP_STATUS = 'NavigationBadHttpStatus';
	public const CLIENT_CERT_REQUESTED = 'ClientCertRequested';
	public const NAVIGATION_REQUEST_NETWORK_ERROR = 'NavigationRequestNetworkError';
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
	public const MEMORY_LIMIT_EXCEEDED = 'MemoryLimitExceeded';
	public const DATA_SAVER_ENABLED = 'DataSaverEnabled';
	public const TRIGGER_URL_HAS_EFFECTIVE_URL = 'TriggerUrlHasEffectiveUrl';
	public const ACTIVATED_BEFORE_STARTED = 'ActivatedBeforeStarted';
	public const INACTIVE_PAGE_RESTRICTION = 'InactivePageRestriction';
	public const START_FAILED = 'StartFailed';
	public const TIMEOUT_BACKGROUNDED = 'TimeoutBackgrounded';
	public const CROSS_SITE_REDIRECT_IN_INITIAL_NAVIGATION = 'CrossSiteRedirectInInitialNavigation';
	public const CROSS_SITE_NAVIGATION_IN_INITIAL_NAVIGATION = 'CrossSiteNavigationInInitialNavigation';
	public const SAME_SITE_CROSS_ORIGIN_REDIRECT_NOT_OPT_IN_IN_INITIAL_NAVIGATION = 'SameSiteCrossOriginRedirectNotOptInInInitialNavigation';
	public const SAME_SITE_CROSS_ORIGIN_NAVIGATION_NOT_OPT_IN_IN_INITIAL_NAVIGATION = 'SameSiteCrossOriginNavigationNotOptInInInitialNavigation';
	public const ACTIVATION_NAVIGATION_PARAMETER_MISMATCH = 'ActivationNavigationParameterMismatch';
	public const ACTIVATED_IN_BACKGROUND = 'ActivatedInBackground';
	public const EMBEDDER_HOST_DISALLOWED = 'EmbedderHostDisallowed';
	public const ACTIVATION_NAVIGATION_DESTROYED_BEFORE_SUCCESS = 'ActivationNavigationDestroyedBeforeSuccess';
	public const TAB_CLOSED_BY_USER_GESTURE = 'TabClosedByUserGesture';
	public const TAB_CLOSED_WITHOUT_USER_GESTURE = 'TabClosedWithoutUserGesture';
	public const PRIMARY_MAIN_FRAME_RENDERER_PROCESS_CRASHED = 'PrimaryMainFrameRendererProcessCrashed';
	public const PRIMARY_MAIN_FRAME_RENDERER_PROCESS_KILLED = 'PrimaryMainFrameRendererProcessKilled';
	public const ACTIVATION_FRAME_POLICY_NOT_COMPATIBLE = 'ActivationFramePolicyNotCompatible';
	public const PRELOADING_DISABLED = 'PreloadingDisabled';
	public const BATTERY_SAVER_ENABLED = 'BatterySaverEnabled';
	public const ACTIVATED_DURING_MAIN_FRAME_NAVIGATION = 'ActivatedDuringMainFrameNavigation';
	public const PRELOADING_UNSUPPORTED_BY_WEB_CONTENTS = 'PreloadingUnsupportedByWebContents';
	public const CROSS_SITE_REDIRECT_IN_MAIN_FRAME_NAVIGATION = 'CrossSiteRedirectInMainFrameNavigation';
	public const CROSS_SITE_NAVIGATION_IN_MAIN_FRAME_NAVIGATION = 'CrossSiteNavigationInMainFrameNavigation';
	public const SAME_SITE_CROSS_ORIGIN_REDIRECT_NOT_OPT_IN_IN_MAIN_FRAME_NAVIGATION = 'SameSiteCrossOriginRedirectNotOptInInMainFrameNavigation';
	public const SAME_SITE_CROSS_ORIGIN_NAVIGATION_NOT_OPT_IN_IN_MAIN_FRAME_NAVIGATION = 'SameSiteCrossOriginNavigationNotOptInInMainFrameNavigation';
	public const MEMORY_PRESSURE_ON_TRIGGER = 'MemoryPressureOnTrigger';
	public const MEMORY_PRESSURE_AFTER_TRIGGERED = 'MemoryPressureAfterTriggered';
	public const PRERENDERING_DISABLED_BY_DEV_TOOLS = 'PrerenderingDisabledByDevTools';
	public const SPECULATION_RULE_REMOVED = 'SpeculationRuleRemoved';
	public const ACTIVATED_WITH_AUXILIARY_BROWSING_CONTEXTS = 'ActivatedWithAuxiliaryBrowsingContexts';
	public const MAX_NUM_OF_RUNNING_EAGER_PRERENDERS_EXCEEDED = 'MaxNumOfRunningEagerPrerendersExceeded';
	public const MAX_NUM_OF_RUNNING_NON_EAGER_PRERENDERS_EXCEEDED = 'MaxNumOfRunningNonEagerPrerendersExceeded';
	public const MAX_NUM_OF_RUNNING_EMBEDDER_PRERENDERS_EXCEEDED = 'MaxNumOfRunningEmbedderPrerendersExceeded';
	public const PRERENDERING_URL_HAS_EFFECTIVE_URL = 'PrerenderingUrlHasEffectiveUrl';
	public const REDIRECTED_PRERENDERING_URL_HAS_EFFECTIVE_URL = 'RedirectedPrerenderingUrlHasEffectiveUrl';
	public const ACTIVATION_URL_HAS_EFFECTIVE_URL = 'ActivationUrlHasEffectiveUrl';
	public const JAVA_SCRIPT_INTERFACE_ADDED = 'JavaScriptInterfaceAdded';
	public const JAVA_SCRIPT_INTERFACE_REMOVED = 'JavaScriptInterfaceRemoved';
	public const ALL_PRERENDERING_CANCELED = 'AllPrerenderingCanceled';
	public const WINDOW_CLOSED = 'WindowClosed';
	public const SLOW_NETWORK = 'SlowNetwork';
	public const OTHER_PRERENDERED_PAGE_ACTIVATED = 'OtherPrerenderedPageActivated';
	public const V8_OPTIMIZER_DISABLED = 'V8OptimizerDisabled';
	public const PRERENDER_FAILED_DURING_PREFETCH = 'PrerenderFailedDuringPrefetch';
	public const BROWSING_DATA_REMOVED = 'BrowsingDataRemoved';
	public const PRERENDER_HOST_REUSED = 'PrerenderHostReused';
}
