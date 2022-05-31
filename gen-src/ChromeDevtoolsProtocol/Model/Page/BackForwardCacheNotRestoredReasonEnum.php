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
	public const NOT_PRIMARY_MAIN_FRAME = 'NotPrimaryMainFrame';
	public const BACK_FORWARD_CACHE_DISABLED = 'BackForwardCacheDisabled';
	public const RELATED_ACTIVE_CONTENTS_EXIST = 'RelatedActiveContentsExist';
	public const HTTP_STATUS_NOT_O_K = 'HTTPStatusNotOK';
	public const SCHEME_NOT_H_T_T_P_OR_H_T_T_P_S = 'SchemeNotHTTPOrHTTPS';
	public const LOADING = 'Loading';
	public const WAS_GRANTED_MEDIA_ACCESS = 'WasGrantedMediaAccess';
	public const DISABLE_FOR_RENDER_FRAME_HOST_CALLED = 'DisableForRenderFrameHostCalled';
	public const DOMAIN_NOT_ALLOWED = 'DomainNotAllowed';
	public const HTTP_METHOD_NOT_G_E_T = 'HTTPMethodNotGET';
	public const SUBFRAME_IS_NAVIGATING = 'SubframeIsNavigating';
	public const TIMEOUT = 'Timeout';
	public const CACHE_LIMIT = 'CacheLimit';
	public const JAVA_SCRIPT_EXECUTION = 'JavaScriptExecution';
	public const RENDERER_PROCESS_KILLED = 'RendererProcessKilled';
	public const RENDERER_PROCESS_CRASHED = 'RendererProcessCrashed';
	public const SCHEDULER_TRACKED_FEATURE_USED = 'SchedulerTrackedFeatureUsed';
	public const CONFLICTING_BROWSING_INSTANCE = 'ConflictingBrowsingInstance';
	public const CACHE_FLUSHED = 'CacheFlushed';
	public const SERVICE_WORKER_VERSION_ACTIVATION = 'ServiceWorkerVersionActivation';
	public const SESSION_RESTORED = 'SessionRestored';
	public const SERVICE_WORKER_POST_MESSAGE = 'ServiceWorkerPostMessage';
	public const ENTERED_BACK_FORWARD_CACHE_BEFORE_SERVICE_WORKER_HOST_ADDED = 'EnteredBackForwardCacheBeforeServiceWorkerHostAdded';
	public const RENDER_FRAME_HOST_REUSED_SAME_SITE = 'RenderFrameHostReused_SameSite';
	public const RENDER_FRAME_HOST_REUSED_CROSS_SITE = 'RenderFrameHostReused_CrossSite';
	public const SERVICE_WORKER_CLAIM = 'ServiceWorkerClaim';
	public const IGNORE_EVENT_AND_EVICT = 'IgnoreEventAndEvict';
	public const HAVE_INNER_CONTENTS = 'HaveInnerContents';
	public const TIMEOUT_PUTTING_IN_CACHE = 'TimeoutPuttingInCache';
	public const BACK_FORWARD_CACHE_DISABLED_BY_LOW_MEMORY = 'BackForwardCacheDisabledByLowMemory';
	public const BACK_FORWARD_CACHE_DISABLED_BY_COMMAND_LINE = 'BackForwardCacheDisabledByCommandLine';
	public const NETWORK_REQUEST_DATAPIPE_DRAINED_AS_BYTES_CONSUMER = 'NetworkRequestDatapipeDrainedAsBytesConsumer';
	public const NETWORK_REQUEST_REDIRECTED = 'NetworkRequestRedirected';
	public const NETWORK_REQUEST_TIMEOUT = 'NetworkRequestTimeout';
	public const NETWORK_EXCEEDS_BUFFER_LIMIT = 'NetworkExceedsBufferLimit';
	public const NAVIGATION_CANCELLED_WHILE_RESTORING = 'NavigationCancelledWhileRestoring';
	public const NOT_MOST_RECENT_NAVIGATION_ENTRY = 'NotMostRecentNavigationEntry';
	public const BACK_FORWARD_CACHE_DISABLED_FOR_PRERENDER = 'BackForwardCacheDisabledForPrerender';
	public const USER_AGENT_OVERRIDE_DIFFERS = 'UserAgentOverrideDiffers';
	public const FOREGROUND_CACHE_LIMIT = 'ForegroundCacheLimit';
	public const BROWSING_INSTANCE_NOT_SWAPPED = 'BrowsingInstanceNotSwapped';
	public const BACK_FORWARD_CACHE_DISABLED_FOR_DELEGATE = 'BackForwardCacheDisabledForDelegate';
	public const UNLOAD_HANDLER_EXISTS_IN_MAIN_FRAME = 'UnloadHandlerExistsInMainFrame';
	public const UNLOAD_HANDLER_EXISTS_IN_SUB_FRAME = 'UnloadHandlerExistsInSubFrame';
	public const SERVICE_WORKER_UNREGISTRATION = 'ServiceWorkerUnregistration';
	public const CACHE_CONTROL_NO_STORE = 'CacheControlNoStore';
	public const CACHE_CONTROL_NO_STORE_COOKIE_MODIFIED = 'CacheControlNoStoreCookieModified';
	public const CACHE_CONTROL_NO_STORE_H_T_T_P_ONLY_COOKIE_MODIFIED = 'CacheControlNoStoreHTTPOnlyCookieModified';
	public const NO_RESPONSE_HEAD = 'NoResponseHead';
	public const UNKNOWN = 'Unknown';
	public const ACTIVATION_NAVIGATIONS_DISALLOWED_FOR_BUG1234857 = 'ActivationNavigationsDisallowedForBug1234857';
	public const ERROR_DOCUMENT = 'ErrorDocument';
	public const FENCED_FRAMES_EMBEDDER = 'FencedFramesEmbedder';
	public const WEB_SOCKET = 'WebSocket';
	public const WEB_TRANSPORT = 'WebTransport';
	public const WEB_R_T_C = 'WebRTC';
	public const MAIN_RESOURCE_HAS_CACHE_CONTROL_NO_STORE = 'MainResourceHasCacheControlNoStore';
	public const MAIN_RESOURCE_HAS_CACHE_CONTROL_NO_CACHE = 'MainResourceHasCacheControlNoCache';
	public const SUBRESOURCE_HAS_CACHE_CONTROL_NO_STORE = 'SubresourceHasCacheControlNoStore';
	public const SUBRESOURCE_HAS_CACHE_CONTROL_NO_CACHE = 'SubresourceHasCacheControlNoCache';
	public const CONTAINS_PLUGINS = 'ContainsPlugins';
	public const DOCUMENT_LOADED = 'DocumentLoaded';
	public const DEDICATED_WORKER_OR_WORKLET = 'DedicatedWorkerOrWorklet';
	public const OUTSTANDING_NETWORK_REQUEST_OTHERS = 'OutstandingNetworkRequestOthers';
	public const OUTSTANDING_INDEXED_D_B_TRANSACTION = 'OutstandingIndexedDBTransaction';
	public const REQUESTED_NOTIFICATIONS_PERMISSION = 'RequestedNotificationsPermission';
	public const REQUESTED_M_I_D_I_PERMISSION = 'RequestedMIDIPermission';
	public const REQUESTED_AUDIO_CAPTURE_PERMISSION = 'RequestedAudioCapturePermission';
	public const REQUESTED_VIDEO_CAPTURE_PERMISSION = 'RequestedVideoCapturePermission';
	public const REQUESTED_BACK_FORWARD_CACHE_BLOCKED_SENSORS = 'RequestedBackForwardCacheBlockedSensors';
	public const REQUESTED_BACKGROUND_WORK_PERMISSION = 'RequestedBackgroundWorkPermission';
	public const BROADCAST_CHANNEL = 'BroadcastChannel';
	public const INDEXED_D_B_CONNECTION = 'IndexedDBConnection';
	public const WEB_X_R = 'WebXR';
	public const SHARED_WORKER = 'SharedWorker';
	public const WEB_LOCKS = 'WebLocks';
	public const WEB_H_I_D = 'WebHID';
	public const WEB_SHARE = 'WebShare';
	public const REQUESTED_STORAGE_ACCESS_GRANT = 'RequestedStorageAccessGrant';
	public const WEB_NFC = 'WebNfc';
	public const OUTSTANDING_NETWORK_REQUEST_FETCH = 'OutstandingNetworkRequestFetch';
	public const OUTSTANDING_NETWORK_REQUEST_X_H_R = 'OutstandingNetworkRequestXHR';
	public const APP_BANNER = 'AppBanner';
	public const PRINTING = 'Printing';
	public const WEB_DATABASE = 'WebDatabase';
	public const PICTURE_IN_PICTURE = 'PictureInPicture';
	public const PORTAL = 'Portal';
	public const SPEECH_RECOGNIZER = 'SpeechRecognizer';
	public const IDLE_MANAGER = 'IdleManager';
	public const PAYMENT_MANAGER = 'PaymentManager';
	public const SPEECH_SYNTHESIS = 'SpeechSynthesis';
	public const KEYBOARD_LOCK = 'KeyboardLock';
	public const WEB_O_T_P_SERVICE = 'WebOTPService';
	public const OUTSTANDING_NETWORK_REQUEST_DIRECT_SOCKET = 'OutstandingNetworkRequestDirectSocket';
	public const INJECTED_JAVASCRIPT = 'InjectedJavascript';
	public const INJECTED_STYLE_SHEET = 'InjectedStyleSheet';
	public const DUMMY = 'Dummy';
	public const CONTENT_SECURITY_HANDLER = 'ContentSecurityHandler';
	public const CONTENT_WEB_AUTHENTICATION_A_P_I = 'ContentWebAuthenticationAPI';
	public const CONTENT_FILE_CHOOSER = 'ContentFileChooser';
	public const CONTENT_SERIAL = 'ContentSerial';
	public const CONTENT_FILE_SYSTEM_ACCESS = 'ContentFileSystemAccess';
	public const CONTENT_MEDIA_DEVICES_DISPATCHER_HOST = 'ContentMediaDevicesDispatcherHost';
	public const CONTENT_WEB_BLUETOOTH = 'ContentWebBluetooth';
	public const CONTENT_WEB_U_S_B = 'ContentWebUSB';
	public const CONTENT_MEDIA_SESSION_SERVICE = 'ContentMediaSessionService';
	public const CONTENT_SCREEN_READER = 'ContentScreenReader';
	public const EMBEDDER_POPUP_BLOCKER_TAB_HELPER = 'EmbedderPopupBlockerTabHelper';
	public const EMBEDDER_SAFE_BROWSING_TRIGGERED_POPUP_BLOCKER = 'EmbedderSafeBrowsingTriggeredPopupBlocker';
	public const EMBEDDER_SAFE_BROWSING_THREAT_DETAILS = 'EmbedderSafeBrowsingThreatDetails';
	public const EMBEDDER_APP_BANNER_MANAGER = 'EmbedderAppBannerManager';
	public const EMBEDDER_DOM_DISTILLER_VIEWER_SOURCE = 'EmbedderDomDistillerViewerSource';
	public const EMBEDDER_DOM_DISTILLER_SELF_DELETING_REQUEST_DELEGATE = 'EmbedderDomDistillerSelfDeletingRequestDelegate';
	public const EMBEDDER_OOM_INTERVENTION_TAB_HELPER = 'EmbedderOomInterventionTabHelper';
	public const EMBEDDER_OFFLINE_PAGE = 'EmbedderOfflinePage';
	public const EMBEDDER_CHROME_PASSWORD_MANAGER_CLIENT_BIND_CREDENTIAL_MANAGER = 'EmbedderChromePasswordManagerClientBindCredentialManager';
	public const EMBEDDER_PERMISSION_REQUEST_MANAGER = 'EmbedderPermissionRequestManager';
	public const EMBEDDER_MODAL_DIALOG = 'EmbedderModalDialog';
	public const EMBEDDER_EXTENSIONS = 'EmbedderExtensions';
	public const EMBEDDER_EXTENSION_MESSAGING = 'EmbedderExtensionMessaging';
	public const EMBEDDER_EXTENSION_MESSAGING_FOR_OPEN_PORT = 'EmbedderExtensionMessagingForOpenPort';
	public const EMBEDDER_EXTENSION_SENT_MESSAGE_TO_CACHED_FRAME = 'EmbedderExtensionSentMessageToCachedFrame';
}
