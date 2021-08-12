<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * List of not restored reasons for back-forward cache.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BackForwardCacheNotRestoredReasonEnum
{
	const NOT_MAIN_FRAME = 'NotMainFrame';
	const BACK_FORWARD_CACHE_DISABLED = 'BackForwardCacheDisabled';
	const RELATED_ACTIVE_CONTENTS_EXIST = 'RelatedActiveContentsExist';
	const HTTP_STATUS_NOT_O_K = 'HTTPStatusNotOK';
	const SCHEME_NOT_H_T_T_P_OR_H_T_T_P_S = 'SchemeNotHTTPOrHTTPS';
	const LOADING = 'Loading';
	const WAS_GRANTED_MEDIA_ACCESS = 'WasGrantedMediaAccess';
	const DISABLE_FOR_RENDER_FRAME_HOST_CALLED = 'DisableForRenderFrameHostCalled';
	const DOMAIN_NOT_ALLOWED = 'DomainNotAllowed';
	const HTTP_METHOD_NOT_G_E_T = 'HTTPMethodNotGET';
	const SUBFRAME_IS_NAVIGATING = 'SubframeIsNavigating';
	const TIMEOUT = 'Timeout';
	const CACHE_LIMIT = 'CacheLimit';
	const JAVA_SCRIPT_EXECUTION = 'JavaScriptExecution';
	const RENDERER_PROCESS_KILLED = 'RendererProcessKilled';
	const RENDERER_PROCESS_CRASHED = 'RendererProcessCrashed';
	const GRANTED_MEDIA_STREAM_ACCESS = 'GrantedMediaStreamAccess';
	const SCHEDULER_TRACKED_FEATURE_USED = 'SchedulerTrackedFeatureUsed';
	const CONFLICTING_BROWSING_INSTANCE = 'ConflictingBrowsingInstance';
	const CACHE_FLUSHED = 'CacheFlushed';
	const SERVICE_WORKER_VERSION_ACTIVATION = 'ServiceWorkerVersionActivation';
	const SESSION_RESTORED = 'SessionRestored';
	const SERVICE_WORKER_POST_MESSAGE = 'ServiceWorkerPostMessage';
	const ENTERED_BACK_FORWARD_CACHE_BEFORE_SERVICE_WORKER_HOST_ADDED = 'EnteredBackForwardCacheBeforeServiceWorkerHostAdded';
	const RENDER_FRAME_HOST_REUSED_SAME_SITE = 'RenderFrameHostReused_SameSite';
	const RENDER_FRAME_HOST_REUSED_CROSS_SITE = 'RenderFrameHostReused_CrossSite';
	const SERVICE_WORKER_CLAIM = 'ServiceWorkerClaim';
	const IGNORE_EVENT_AND_EVICT = 'IgnoreEventAndEvict';
	const HAVE_INNER_CONTENTS = 'HaveInnerContents';
	const TIMEOUT_PUTTING_IN_CACHE = 'TimeoutPuttingInCache';
	const BACK_FORWARD_CACHE_DISABLED_BY_LOW_MEMORY = 'BackForwardCacheDisabledByLowMemory';
	const BACK_FORWARD_CACHE_DISABLED_BY_COMMAND_LINE = 'BackForwardCacheDisabledByCommandLine';
	const NETWORK_REQUEST_DATAPIPE_DRAINED_AS_BYTES_CONSUMER = 'NetworkRequestDatapipeDrainedAsBytesConsumer';
	const NETWORK_REQUEST_REDIRECTED = 'NetworkRequestRedirected';
	const NETWORK_REQUEST_TIMEOUT = 'NetworkRequestTimeout';
	const NETWORK_EXCEEDS_BUFFER_LIMIT = 'NetworkExceedsBufferLimit';
	const NAVIGATION_CANCELLED_WHILE_RESTORING = 'NavigationCancelledWhileRestoring';
	const NOT_MOST_RECENT_NAVIGATION_ENTRY = 'NotMostRecentNavigationEntry';
	const BACK_FORWARD_CACHE_DISABLED_FOR_PRERENDER = 'BackForwardCacheDisabledForPrerender';
	const USER_AGENT_OVERRIDE_DIFFERS = 'UserAgentOverrideDiffers';
	const FOREGROUND_CACHE_LIMIT = 'ForegroundCacheLimit';
	const BROWSING_INSTANCE_NOT_SWAPPED = 'BrowsingInstanceNotSwapped';
	const BACK_FORWARD_CACHE_DISABLED_FOR_DELEGATE = 'BackForwardCacheDisabledForDelegate';
	const OPT_IN_UNLOAD_HEADER_NOT_PRESENT = 'OptInUnloadHeaderNotPresent';
	const UNLOAD_HANDLER_EXISTS_IN_SUB_FRAME = 'UnloadHandlerExistsInSubFrame';
	const SERVICE_WORKER_UNREGISTRATION = 'ServiceWorkerUnregistration';
	const CACHE_CONTROL_NO_STORE = 'CacheControlNoStore';
	const CACHE_CONTROL_NO_STORE_COOKIE_MODIFIED = 'CacheControlNoStoreCookieModified';
	const CACHE_CONTROL_NO_STORE_H_T_T_P_ONLY_COOKIE_MODIFIED = 'CacheControlNoStoreHTTPOnlyCookieModified';
	const NO_RESPONSE_HEAD = 'NoResponseHead';
	const UNKNOWN = 'Unknown';
	const ACTIVATION_NAVIGATIONS_DISALLOWED_FOR_BUG1234857 = 'ActivationNavigationsDisallowedForBug1234857';
	const WEB_SOCKET = 'WebSocket';
	const WEB_TRANSPORT = 'WebTransport';
	const WEB_R_T_C = 'WebRTC';
	const MAIN_RESOURCE_HAS_CACHE_CONTROL_NO_STORE = 'MainResourceHasCacheControlNoStore';
	const MAIN_RESOURCE_HAS_CACHE_CONTROL_NO_CACHE = 'MainResourceHasCacheControlNoCache';
	const SUBRESOURCE_HAS_CACHE_CONTROL_NO_STORE = 'SubresourceHasCacheControlNoStore';
	const SUBRESOURCE_HAS_CACHE_CONTROL_NO_CACHE = 'SubresourceHasCacheControlNoCache';
	const CONTAINS_PLUGINS = 'ContainsPlugins';
	const DOCUMENT_LOADED = 'DocumentLoaded';
	const DEDICATED_WORKER_OR_WORKLET = 'DedicatedWorkerOrWorklet';
	const OUTSTANDING_NETWORK_REQUEST_OTHERS = 'OutstandingNetworkRequestOthers';
	const OUTSTANDING_INDEXED_D_B_TRANSACTION = 'OutstandingIndexedDBTransaction';
	const REQUESTED_NOTIFICATIONS_PERMISSION = 'RequestedNotificationsPermission';
	const REQUESTED_M_I_D_I_PERMISSION = 'RequestedMIDIPermission';
	const REQUESTED_AUDIO_CAPTURE_PERMISSION = 'RequestedAudioCapturePermission';
	const REQUESTED_VIDEO_CAPTURE_PERMISSION = 'RequestedVideoCapturePermission';
	const REQUESTED_BACK_FORWARD_CACHE_BLOCKED_SENSORS = 'RequestedBackForwardCacheBlockedSensors';
	const REQUESTED_BACKGROUND_WORK_PERMISSION = 'RequestedBackgroundWorkPermission';
	const BROADCAST_CHANNEL = 'BroadcastChannel';
	const INDEXED_D_B_CONNECTION = 'IndexedDBConnection';
	const WEB_X_R = 'WebXR';
	const SHARED_WORKER = 'SharedWorker';
	const WEB_LOCKS = 'WebLocks';
	const WEB_H_I_D = 'WebHID';
	const WEB_SHARE = 'WebShare';
	const REQUESTED_STORAGE_ACCESS_GRANT = 'RequestedStorageAccessGrant';
	const WEB_NFC = 'WebNfc';
	const WEB_FILE_SYSTEM = 'WebFileSystem';
	const OUTSTANDING_NETWORK_REQUEST_FETCH = 'OutstandingNetworkRequestFetch';
	const OUTSTANDING_NETWORK_REQUEST_X_H_R = 'OutstandingNetworkRequestXHR';
	const APP_BANNER = 'AppBanner';
	const PRINTING = 'Printing';
	const WEB_DATABASE = 'WebDatabase';
	const PICTURE_IN_PICTURE = 'PictureInPicture';
	const PORTAL = 'Portal';
	const SPEECH_RECOGNIZER = 'SpeechRecognizer';
	const IDLE_MANAGER = 'IdleManager';
	const PAYMENT_MANAGER = 'PaymentManager';
	const SPEECH_SYNTHESIS = 'SpeechSynthesis';
	const KEYBOARD_LOCK = 'KeyboardLock';
	const WEB_O_T_P_SERVICE = 'WebOTPService';
	const OUTSTANDING_NETWORK_REQUEST_DIRECT_SOCKET = 'OutstandingNetworkRequestDirectSocket';
	const ISOLATED_WORLD_SCRIPT = 'IsolatedWorldScript';
	const INJECTED_STYLE_SHEET = 'InjectedStyleSheet';
	const MEDIA_SESSION_IMPL_ON_SERVICE_CREATED = 'MediaSessionImplOnServiceCreated';
	const SECURITY_HANDLER = 'SecurityHandler';
	const WEB_AUTHENTICATION_A_P_I = 'WebAuthenticationAPI';
	const FILE_CHOOSER = 'FileChooser';
	const SERIAL = 'Serial';
	const FILE_SYSTEM_ACCESS = 'FileSystemAccess';
	const MEDIA_DEVICES_DISPATCHER_HOST = 'MediaDevicesDispatcherHost';
	const WEB_BLUETOOTH = 'WebBluetooth';
	const WEB_U_S_B = 'WebUSB';
	const MEDIA_SESSION = 'MediaSession';
}
