<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Page\AddCompilationCacheRequest;
use ChromeDevtoolsProtocol\Model\Page\AddScriptToEvaluateOnLoadRequest;
use ChromeDevtoolsProtocol\Model\Page\AddScriptToEvaluateOnLoadResponse;
use ChromeDevtoolsProtocol\Model\Page\AddScriptToEvaluateOnNewDocumentRequest;
use ChromeDevtoolsProtocol\Model\Page\AddScriptToEvaluateOnNewDocumentResponse;
use ChromeDevtoolsProtocol\Model\Page\CaptureScreenshotRequest;
use ChromeDevtoolsProtocol\Model\Page\CaptureScreenshotResponse;
use ChromeDevtoolsProtocol\Model\Page\CaptureSnapshotRequest;
use ChromeDevtoolsProtocol\Model\Page\CaptureSnapshotResponse;
use ChromeDevtoolsProtocol\Model\Page\CompilationCacheProducedEvent;
use ChromeDevtoolsProtocol\Model\Page\CreateIsolatedWorldRequest;
use ChromeDevtoolsProtocol\Model\Page\CreateIsolatedWorldResponse;
use ChromeDevtoolsProtocol\Model\Page\DeleteCookieRequest;
use ChromeDevtoolsProtocol\Model\Page\DomContentEventFiredEvent;
use ChromeDevtoolsProtocol\Model\Page\DownloadWillBeginEvent;
use ChromeDevtoolsProtocol\Model\Page\FrameAttachedEvent;
use ChromeDevtoolsProtocol\Model\Page\FrameClearedScheduledNavigationEvent;
use ChromeDevtoolsProtocol\Model\Page\FrameDetachedEvent;
use ChromeDevtoolsProtocol\Model\Page\FrameNavigatedEvent;
use ChromeDevtoolsProtocol\Model\Page\FrameRequestedNavigationEvent;
use ChromeDevtoolsProtocol\Model\Page\FrameResizedEvent;
use ChromeDevtoolsProtocol\Model\Page\FrameScheduledNavigationEvent;
use ChromeDevtoolsProtocol\Model\Page\FrameStartedLoadingEvent;
use ChromeDevtoolsProtocol\Model\Page\FrameStoppedLoadingEvent;
use ChromeDevtoolsProtocol\Model\Page\GenerateTestReportRequest;
use ChromeDevtoolsProtocol\Model\Page\GetAppManifestResponse;
use ChromeDevtoolsProtocol\Model\Page\GetCookiesResponse;
use ChromeDevtoolsProtocol\Model\Page\GetFrameTreeResponse;
use ChromeDevtoolsProtocol\Model\Page\GetInstallabilityErrorsResponse;
use ChromeDevtoolsProtocol\Model\Page\GetLayoutMetricsResponse;
use ChromeDevtoolsProtocol\Model\Page\GetNavigationHistoryResponse;
use ChromeDevtoolsProtocol\Model\Page\GetResourceContentRequest;
use ChromeDevtoolsProtocol\Model\Page\GetResourceContentResponse;
use ChromeDevtoolsProtocol\Model\Page\GetResourceTreeResponse;
use ChromeDevtoolsProtocol\Model\Page\HandleJavaScriptDialogRequest;
use ChromeDevtoolsProtocol\Model\Page\InterstitialHiddenEvent;
use ChromeDevtoolsProtocol\Model\Page\InterstitialShownEvent;
use ChromeDevtoolsProtocol\Model\Page\JavascriptDialogClosedEvent;
use ChromeDevtoolsProtocol\Model\Page\JavascriptDialogOpeningEvent;
use ChromeDevtoolsProtocol\Model\Page\LifecycleEventEvent;
use ChromeDevtoolsProtocol\Model\Page\LoadEventFiredEvent;
use ChromeDevtoolsProtocol\Model\Page\NavigateRequest;
use ChromeDevtoolsProtocol\Model\Page\NavigateResponse;
use ChromeDevtoolsProtocol\Model\Page\NavigateToHistoryEntryRequest;
use ChromeDevtoolsProtocol\Model\Page\NavigatedWithinDocumentEvent;
use ChromeDevtoolsProtocol\Model\Page\PrintToPDFRequest;
use ChromeDevtoolsProtocol\Model\Page\PrintToPDFResponse;
use ChromeDevtoolsProtocol\Model\Page\ReloadRequest;
use ChromeDevtoolsProtocol\Model\Page\RemoveScriptToEvaluateOnLoadRequest;
use ChromeDevtoolsProtocol\Model\Page\RemoveScriptToEvaluateOnNewDocumentRequest;
use ChromeDevtoolsProtocol\Model\Page\ScreencastFrameAckRequest;
use ChromeDevtoolsProtocol\Model\Page\ScreencastFrameEvent;
use ChromeDevtoolsProtocol\Model\Page\ScreencastVisibilityChangedEvent;
use ChromeDevtoolsProtocol\Model\Page\SearchInResourceRequest;
use ChromeDevtoolsProtocol\Model\Page\SearchInResourceResponse;
use ChromeDevtoolsProtocol\Model\Page\SetAdBlockingEnabledRequest;
use ChromeDevtoolsProtocol\Model\Page\SetBypassCSPRequest;
use ChromeDevtoolsProtocol\Model\Page\SetDeviceMetricsOverrideRequest;
use ChromeDevtoolsProtocol\Model\Page\SetDeviceOrientationOverrideRequest;
use ChromeDevtoolsProtocol\Model\Page\SetDocumentContentRequest;
use ChromeDevtoolsProtocol\Model\Page\SetDownloadBehaviorRequest;
use ChromeDevtoolsProtocol\Model\Page\SetFontFamiliesRequest;
use ChromeDevtoolsProtocol\Model\Page\SetFontSizesRequest;
use ChromeDevtoolsProtocol\Model\Page\SetGeolocationOverrideRequest;
use ChromeDevtoolsProtocol\Model\Page\SetLifecycleEventsEnabledRequest;
use ChromeDevtoolsProtocol\Model\Page\SetProduceCompilationCacheRequest;
use ChromeDevtoolsProtocol\Model\Page\SetTouchEmulationEnabledRequest;
use ChromeDevtoolsProtocol\Model\Page\SetWebLifecycleStateRequest;
use ChromeDevtoolsProtocol\Model\Page\StartScreencastRequest;
use ChromeDevtoolsProtocol\Model\Page\WindowOpenEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * Actions and events related to the inspected page belong to the page domain.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface PageDomainInterface
{
	/**
	 * Seeds compilation cache for given url. Compilation cache does not survive cross-process navigation.
	 *
	 * @param ContextInterface $ctx
	 * @param AddCompilationCacheRequest $request
	 *
	 * @return void
	 */
	public function addCompilationCache(ContextInterface $ctx, AddCompilationCacheRequest $request): void;


	/**
	 * Deprecated, please use addScriptToEvaluateOnNewDocument instead.
	 *
	 * @param ContextInterface $ctx
	 * @param AddScriptToEvaluateOnLoadRequest $request
	 *
	 * @return AddScriptToEvaluateOnLoadResponse
	 */
	public function addScriptToEvaluateOnLoad(ContextInterface $ctx, AddScriptToEvaluateOnLoadRequest $request): AddScriptToEvaluateOnLoadResponse;


	/**
	 * Evaluates given script in every frame upon creation (before loading frame's scripts).
	 *
	 * @param ContextInterface $ctx
	 * @param AddScriptToEvaluateOnNewDocumentRequest $request
	 *
	 * @return AddScriptToEvaluateOnNewDocumentResponse
	 */
	public function addScriptToEvaluateOnNewDocument(ContextInterface $ctx, AddScriptToEvaluateOnNewDocumentRequest $request): AddScriptToEvaluateOnNewDocumentResponse;


	/**
	 * Brings page to front (activates tab).
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function bringToFront(ContextInterface $ctx): void;


	/**
	 * Capture page screenshot.
	 *
	 * @param ContextInterface $ctx
	 * @param CaptureScreenshotRequest $request
	 *
	 * @return CaptureScreenshotResponse
	 */
	public function captureScreenshot(ContextInterface $ctx, CaptureScreenshotRequest $request): CaptureScreenshotResponse;


	/**
	 * Returns a snapshot of the page as a string. For MHTML format, the serialization includes iframes, shadow DOM, external resources, and element-inline styles.
	 *
	 * @param ContextInterface $ctx
	 * @param CaptureSnapshotRequest $request
	 *
	 * @return CaptureSnapshotResponse
	 */
	public function captureSnapshot(ContextInterface $ctx, CaptureSnapshotRequest $request): CaptureSnapshotResponse;


	/**
	 * Clears seeded compilation cache.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function clearCompilationCache(ContextInterface $ctx): void;


	/**
	 * Clears the overriden device metrics.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function clearDeviceMetricsOverride(ContextInterface $ctx): void;


	/**
	 * Clears the overridden Device Orientation.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function clearDeviceOrientationOverride(ContextInterface $ctx): void;


	/**
	 * Clears the overriden Geolocation Position and Error.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function clearGeolocationOverride(ContextInterface $ctx): void;


	/**
	 * Tries to close page, running its beforeunload hooks, if any.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function close(ContextInterface $ctx): void;


	/**
	 * Crashes renderer on the IO thread, generates minidumps.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function crash(ContextInterface $ctx): void;


	/**
	 * Creates an isolated world for the given frame.
	 *
	 * @param ContextInterface $ctx
	 * @param CreateIsolatedWorldRequest $request
	 *
	 * @return CreateIsolatedWorldResponse
	 */
	public function createIsolatedWorld(ContextInterface $ctx, CreateIsolatedWorldRequest $request): CreateIsolatedWorldResponse;


	/**
	 * Deletes browser cookie with given name, domain and path.
	 *
	 * @param ContextInterface $ctx
	 * @param DeleteCookieRequest $request
	 *
	 * @return void
	 */
	public function deleteCookie(ContextInterface $ctx, DeleteCookieRequest $request): void;


	/**
	 * Disables page domain notifications.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables page domain notifications.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Generates a report for testing.
	 *
	 * @param ContextInterface $ctx
	 * @param GenerateTestReportRequest $request
	 *
	 * @return void
	 */
	public function generateTestReport(ContextInterface $ctx, GenerateTestReportRequest $request): void;


	/**
	 * Call Page.getAppManifest command.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetAppManifestResponse
	 */
	public function getAppManifest(ContextInterface $ctx): GetAppManifestResponse;


	/**
	 * Returns all browser cookies. Depending on the backend support, will return detailed cookie information in the `cookies` field.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetCookiesResponse
	 */
	public function getCookies(ContextInterface $ctx): GetCookiesResponse;


	/**
	 * Returns present frame tree structure.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetFrameTreeResponse
	 */
	public function getFrameTree(ContextInterface $ctx): GetFrameTreeResponse;


	/**
	 * Call Page.getInstallabilityErrors command.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetInstallabilityErrorsResponse
	 */
	public function getInstallabilityErrors(ContextInterface $ctx): GetInstallabilityErrorsResponse;


	/**
	 * Returns metrics relating to the layouting of the page, such as viewport bounds/scale.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetLayoutMetricsResponse
	 */
	public function getLayoutMetrics(ContextInterface $ctx): GetLayoutMetricsResponse;


	/**
	 * Returns navigation history for the current page.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetNavigationHistoryResponse
	 */
	public function getNavigationHistory(ContextInterface $ctx): GetNavigationHistoryResponse;


	/**
	 * Returns content of the given resource.
	 *
	 * @param ContextInterface $ctx
	 * @param GetResourceContentRequest $request
	 *
	 * @return GetResourceContentResponse
	 */
	public function getResourceContent(ContextInterface $ctx, GetResourceContentRequest $request): GetResourceContentResponse;


	/**
	 * Returns present frame / resource tree structure.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetResourceTreeResponse
	 */
	public function getResourceTree(ContextInterface $ctx): GetResourceTreeResponse;


	/**
	 * Accepts or dismisses a JavaScript initiated dialog (alert, confirm, prompt, or onbeforeunload).
	 *
	 * @param ContextInterface $ctx
	 * @param HandleJavaScriptDialogRequest $request
	 *
	 * @return void
	 */
	public function handleJavaScriptDialog(ContextInterface $ctx, HandleJavaScriptDialogRequest $request): void;


	/**
	 * Navigates current page to the given URL.
	 *
	 * @param ContextInterface $ctx
	 * @param NavigateRequest $request
	 *
	 * @return NavigateResponse
	 */
	public function navigate(ContextInterface $ctx, NavigateRequest $request): NavigateResponse;


	/**
	 * Navigates current page to the given history entry.
	 *
	 * @param ContextInterface $ctx
	 * @param NavigateToHistoryEntryRequest $request
	 *
	 * @return void
	 */
	public function navigateToHistoryEntry(ContextInterface $ctx, NavigateToHistoryEntryRequest $request): void;


	/**
	 * Print page as PDF.
	 *
	 * @param ContextInterface $ctx
	 * @param PrintToPDFRequest $request
	 *
	 * @return PrintToPDFResponse
	 */
	public function printToPDF(ContextInterface $ctx, PrintToPDFRequest $request): PrintToPDFResponse;


	/**
	 * Reloads given page optionally ignoring the cache.
	 *
	 * @param ContextInterface $ctx
	 * @param ReloadRequest $request
	 *
	 * @return void
	 */
	public function reload(ContextInterface $ctx, ReloadRequest $request): void;


	/**
	 * Deprecated, please use removeScriptToEvaluateOnNewDocument instead.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveScriptToEvaluateOnLoadRequest $request
	 *
	 * @return void
	 */
	public function removeScriptToEvaluateOnLoad(ContextInterface $ctx, RemoveScriptToEvaluateOnLoadRequest $request): void;


	/**
	 * Removes given script from the list.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveScriptToEvaluateOnNewDocumentRequest $request
	 *
	 * @return void
	 */
	public function removeScriptToEvaluateOnNewDocument(ContextInterface $ctx, RemoveScriptToEvaluateOnNewDocumentRequest $request): void;


	/**
	 * Resets navigation history for the current page.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function resetNavigationHistory(ContextInterface $ctx): void;


	/**
	 * Acknowledges that a screencast frame has been received by the frontend.
	 *
	 * @param ContextInterface $ctx
	 * @param ScreencastFrameAckRequest $request
	 *
	 * @return void
	 */
	public function screencastFrameAck(ContextInterface $ctx, ScreencastFrameAckRequest $request): void;


	/**
	 * Searches for given string in resource content.
	 *
	 * @param ContextInterface $ctx
	 * @param SearchInResourceRequest $request
	 *
	 * @return SearchInResourceResponse
	 */
	public function searchInResource(ContextInterface $ctx, SearchInResourceRequest $request): SearchInResourceResponse;


	/**
	 * Enable Chrome's experimental ad filter on all sites.
	 *
	 * @param ContextInterface $ctx
	 * @param SetAdBlockingEnabledRequest $request
	 *
	 * @return void
	 */
	public function setAdBlockingEnabled(ContextInterface $ctx, SetAdBlockingEnabledRequest $request): void;


	/**
	 * Enable page Content Security Policy by-passing.
	 *
	 * @param ContextInterface $ctx
	 * @param SetBypassCSPRequest $request
	 *
	 * @return void
	 */
	public function setBypassCSP(ContextInterface $ctx, SetBypassCSPRequest $request): void;


	/**
	 * Overrides the values of device screen dimensions (window.screen.width, window.screen.height, window.innerWidth, window.innerHeight, and "device-width"/"device-height"-related CSS media query results).
	 *
	 * @param ContextInterface $ctx
	 * @param SetDeviceMetricsOverrideRequest $request
	 *
	 * @return void
	 */
	public function setDeviceMetricsOverride(ContextInterface $ctx, SetDeviceMetricsOverrideRequest $request): void;


	/**
	 * Overrides the Device Orientation.
	 *
	 * @param ContextInterface $ctx
	 * @param SetDeviceOrientationOverrideRequest $request
	 *
	 * @return void
	 */
	public function setDeviceOrientationOverride(ContextInterface $ctx, SetDeviceOrientationOverrideRequest $request): void;


	/**
	 * Sets given markup as the document's HTML.
	 *
	 * @param ContextInterface $ctx
	 * @param SetDocumentContentRequest $request
	 *
	 * @return void
	 */
	public function setDocumentContent(ContextInterface $ctx, SetDocumentContentRequest $request): void;


	/**
	 * Set the behavior when downloading a file.
	 *
	 * @param ContextInterface $ctx
	 * @param SetDownloadBehaviorRequest $request
	 *
	 * @return void
	 */
	public function setDownloadBehavior(ContextInterface $ctx, SetDownloadBehaviorRequest $request): void;


	/**
	 * Set generic font families.
	 *
	 * @param ContextInterface $ctx
	 * @param SetFontFamiliesRequest $request
	 *
	 * @return void
	 */
	public function setFontFamilies(ContextInterface $ctx, SetFontFamiliesRequest $request): void;


	/**
	 * Set default font sizes.
	 *
	 * @param ContextInterface $ctx
	 * @param SetFontSizesRequest $request
	 *
	 * @return void
	 */
	public function setFontSizes(ContextInterface $ctx, SetFontSizesRequest $request): void;


	/**
	 * Overrides the Geolocation Position or Error. Omitting any of the parameters emulates position unavailable.
	 *
	 * @param ContextInterface $ctx
	 * @param SetGeolocationOverrideRequest $request
	 *
	 * @return void
	 */
	public function setGeolocationOverride(ContextInterface $ctx, SetGeolocationOverrideRequest $request): void;


	/**
	 * Controls whether page will emit lifecycle events.
	 *
	 * @param ContextInterface $ctx
	 * @param SetLifecycleEventsEnabledRequest $request
	 *
	 * @return void
	 */
	public function setLifecycleEventsEnabled(ContextInterface $ctx, SetLifecycleEventsEnabledRequest $request): void;


	/**
	 * Forces compilation cache to be generated for every subresource script.
	 *
	 * @param ContextInterface $ctx
	 * @param SetProduceCompilationCacheRequest $request
	 *
	 * @return void
	 */
	public function setProduceCompilationCache(ContextInterface $ctx, SetProduceCompilationCacheRequest $request): void;


	/**
	 * Toggles mouse event-based touch event emulation.
	 *
	 * @param ContextInterface $ctx
	 * @param SetTouchEmulationEnabledRequest $request
	 *
	 * @return void
	 */
	public function setTouchEmulationEnabled(ContextInterface $ctx, SetTouchEmulationEnabledRequest $request): void;


	/**
	 * Tries to update the web lifecycle state of the page. It will transition the page to the given state according to: https://github.com/WICG/web-lifecycle/
	 *
	 * @param ContextInterface $ctx
	 * @param SetWebLifecycleStateRequest $request
	 *
	 * @return void
	 */
	public function setWebLifecycleState(ContextInterface $ctx, SetWebLifecycleStateRequest $request): void;


	/**
	 * Starts sending each frame using the `screencastFrame` event.
	 *
	 * @param ContextInterface $ctx
	 * @param StartScreencastRequest $request
	 *
	 * @return void
	 */
	public function startScreencast(ContextInterface $ctx, StartScreencastRequest $request): void;


	/**
	 * Force the page stop all navigations and pending resource fetches.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function stopLoading(ContextInterface $ctx): void;


	/**
	 * Stops sending each frame in the `screencastFrame`.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function stopScreencast(ContextInterface $ctx): void;


	/**
	 * Pauses page execution. Can be resumed using generic Runtime.runIfWaitingForDebugger.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function waitForDebugger(ContextInterface $ctx): void;


	/**
	 * Issued for every compilation cache generated. Is only available if Page.setGenerateCompilationCache is enabled.
	 *
	 * Listener will be called whenever event Page.compilationCacheProduced is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addCompilationCacheProducedListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued for every compilation cache generated. Is only available if Page.setGenerateCompilationCache is enabled.
	 *
	 * Method will block until first Page.compilationCacheProduced event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return CompilationCacheProducedEvent
	 */
	public function awaitCompilationCacheProduced(ContextInterface $ctx): CompilationCacheProducedEvent;


	/**
	 * Subscribe to Page.domContentEventFired event.
	 *
	 * Listener will be called whenever event Page.domContentEventFired is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDomContentEventFiredListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for Page.domContentEventFired event.
	 *
	 * Method will block until first Page.domContentEventFired event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DomContentEventFiredEvent
	 */
	public function awaitDomContentEventFired(ContextInterface $ctx): DomContentEventFiredEvent;


	/**
	 * Fired when page is about to start a download.
	 *
	 * Listener will be called whenever event Page.downloadWillBegin is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDownloadWillBeginListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when page is about to start a download.
	 *
	 * Method will block until first Page.downloadWillBegin event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DownloadWillBeginEvent
	 */
	public function awaitDownloadWillBegin(ContextInterface $ctx): DownloadWillBeginEvent;


	/**
	 * Fired when frame has been attached to its parent.
	 *
	 * Listener will be called whenever event Page.frameAttached is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addFrameAttachedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when frame has been attached to its parent.
	 *
	 * Method will block until first Page.frameAttached event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return FrameAttachedEvent
	 */
	public function awaitFrameAttached(ContextInterface $ctx): FrameAttachedEvent;


	/**
	 * Fired when frame no longer has a scheduled navigation.
	 *
	 * Listener will be called whenever event Page.frameClearedScheduledNavigation is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addFrameClearedScheduledNavigationListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when frame no longer has a scheduled navigation.
	 *
	 * Method will block until first Page.frameClearedScheduledNavigation event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return FrameClearedScheduledNavigationEvent
	 */
	public function awaitFrameClearedScheduledNavigation(ContextInterface $ctx): FrameClearedScheduledNavigationEvent;


	/**
	 * Fired when frame has been detached from its parent.
	 *
	 * Listener will be called whenever event Page.frameDetached is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addFrameDetachedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when frame has been detached from its parent.
	 *
	 * Method will block until first Page.frameDetached event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return FrameDetachedEvent
	 */
	public function awaitFrameDetached(ContextInterface $ctx): FrameDetachedEvent;


	/**
	 * Fired once navigation of the frame has completed. Frame is now associated with the new loader.
	 *
	 * Listener will be called whenever event Page.frameNavigated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addFrameNavigatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired once navigation of the frame has completed. Frame is now associated with the new loader.
	 *
	 * Method will block until first Page.frameNavigated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return FrameNavigatedEvent
	 */
	public function awaitFrameNavigated(ContextInterface $ctx): FrameNavigatedEvent;


	/**
	 * Fired when a renderer-initiated navigation is requested. Navigation may still be cancelled after the event is issued.
	 *
	 * Listener will be called whenever event Page.frameRequestedNavigation is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addFrameRequestedNavigationListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when a renderer-initiated navigation is requested. Navigation may still be cancelled after the event is issued.
	 *
	 * Method will block until first Page.frameRequestedNavigation event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return FrameRequestedNavigationEvent
	 */
	public function awaitFrameRequestedNavigation(ContextInterface $ctx): FrameRequestedNavigationEvent;


	/**
	 * Subscribe to Page.frameResized event.
	 *
	 * Listener will be called whenever event Page.frameResized is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addFrameResizedListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for Page.frameResized event.
	 *
	 * Method will block until first Page.frameResized event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return FrameResizedEvent
	 */
	public function awaitFrameResized(ContextInterface $ctx): FrameResizedEvent;


	/**
	 * Fired when frame schedules a potential navigation.
	 *
	 * Listener will be called whenever event Page.frameScheduledNavigation is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addFrameScheduledNavigationListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when frame schedules a potential navigation.
	 *
	 * Method will block until first Page.frameScheduledNavigation event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return FrameScheduledNavigationEvent
	 */
	public function awaitFrameScheduledNavigation(ContextInterface $ctx): FrameScheduledNavigationEvent;


	/**
	 * Fired when frame has started loading.
	 *
	 * Listener will be called whenever event Page.frameStartedLoading is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addFrameStartedLoadingListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when frame has started loading.
	 *
	 * Method will block until first Page.frameStartedLoading event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return FrameStartedLoadingEvent
	 */
	public function awaitFrameStartedLoading(ContextInterface $ctx): FrameStartedLoadingEvent;


	/**
	 * Fired when frame has stopped loading.
	 *
	 * Listener will be called whenever event Page.frameStoppedLoading is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addFrameStoppedLoadingListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when frame has stopped loading.
	 *
	 * Method will block until first Page.frameStoppedLoading event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return FrameStoppedLoadingEvent
	 */
	public function awaitFrameStoppedLoading(ContextInterface $ctx): FrameStoppedLoadingEvent;


	/**
	 * Fired when interstitial page was hidden
	 *
	 * Listener will be called whenever event Page.interstitialHidden is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addInterstitialHiddenListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when interstitial page was hidden
	 *
	 * Method will block until first Page.interstitialHidden event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return InterstitialHiddenEvent
	 */
	public function awaitInterstitialHidden(ContextInterface $ctx): InterstitialHiddenEvent;


	/**
	 * Fired when interstitial page was shown
	 *
	 * Listener will be called whenever event Page.interstitialShown is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addInterstitialShownListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when interstitial page was shown
	 *
	 * Method will block until first Page.interstitialShown event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return InterstitialShownEvent
	 */
	public function awaitInterstitialShown(ContextInterface $ctx): InterstitialShownEvent;


	/**
	 * Fired when a JavaScript initiated dialog (alert, confirm, prompt, or onbeforeunload) has been closed.
	 *
	 * Listener will be called whenever event Page.javascriptDialogClosed is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addJavascriptDialogClosedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when a JavaScript initiated dialog (alert, confirm, prompt, or onbeforeunload) has been closed.
	 *
	 * Method will block until first Page.javascriptDialogClosed event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return JavascriptDialogClosedEvent
	 */
	public function awaitJavascriptDialogClosed(ContextInterface $ctx): JavascriptDialogClosedEvent;


	/**
	 * Fired when a JavaScript initiated dialog (alert, confirm, prompt, or onbeforeunload) is about to open.
	 *
	 * Listener will be called whenever event Page.javascriptDialogOpening is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addJavascriptDialogOpeningListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when a JavaScript initiated dialog (alert, confirm, prompt, or onbeforeunload) is about to open.
	 *
	 * Method will block until first Page.javascriptDialogOpening event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return JavascriptDialogOpeningEvent
	 */
	public function awaitJavascriptDialogOpening(ContextInterface $ctx): JavascriptDialogOpeningEvent;


	/**
	 * Fired for top level page lifecycle events such as navigation, load, paint, etc.
	 *
	 * Listener will be called whenever event Page.lifecycleEvent is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addLifecycleEventListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired for top level page lifecycle events such as navigation, load, paint, etc.
	 *
	 * Method will block until first Page.lifecycleEvent event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return LifecycleEventEvent
	 */
	public function awaitLifecycleEvent(ContextInterface $ctx): LifecycleEventEvent;


	/**
	 * Subscribe to Page.loadEventFired event.
	 *
	 * Listener will be called whenever event Page.loadEventFired is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addLoadEventFiredListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for Page.loadEventFired event.
	 *
	 * Method will block until first Page.loadEventFired event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return LoadEventFiredEvent
	 */
	public function awaitLoadEventFired(ContextInterface $ctx): LoadEventFiredEvent;


	/**
	 * Fired when same-document navigation happens, e.g. due to history API usage or anchor navigation.
	 *
	 * Listener will be called whenever event Page.navigatedWithinDocument is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addNavigatedWithinDocumentListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when same-document navigation happens, e.g. due to history API usage or anchor navigation.
	 *
	 * Method will block until first Page.navigatedWithinDocument event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return NavigatedWithinDocumentEvent
	 */
	public function awaitNavigatedWithinDocument(ContextInterface $ctx): NavigatedWithinDocumentEvent;


	/**
	 * Compressed image data requested by the `startScreencast`.
	 *
	 * Listener will be called whenever event Page.screencastFrame is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addScreencastFrameListener(callable $listener): SubscriptionInterface;


	/**
	 * Compressed image data requested by the `startScreencast`.
	 *
	 * Method will block until first Page.screencastFrame event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ScreencastFrameEvent
	 */
	public function awaitScreencastFrame(ContextInterface $ctx): ScreencastFrameEvent;


	/**
	 * Fired when the page with currently enabled screencast was shown or hidden `.
	 *
	 * Listener will be called whenever event Page.screencastVisibilityChanged is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addScreencastVisibilityChangedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when the page with currently enabled screencast was shown or hidden `.
	 *
	 * Method will block until first Page.screencastVisibilityChanged event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ScreencastVisibilityChangedEvent
	 */
	public function awaitScreencastVisibilityChanged(ContextInterface $ctx): ScreencastVisibilityChangedEvent;


	/**
	 * Fired when a new window is going to be opened, via window.open(), link click, form submission, etc.
	 *
	 * Listener will be called whenever event Page.windowOpen is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addWindowOpenListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when a new window is going to be opened, via window.open(), link click, form submission, etc.
	 *
	 * Method will block until first Page.windowOpen event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return WindowOpenEvent
	 */
	public function awaitWindowOpen(ContextInterface $ctx): WindowOpenEvent;
}
