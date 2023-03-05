<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Page\AddCompilationCacheRequest;
use ChromeDevtoolsProtocol\Model\Page\AddScriptToEvaluateOnLoadRequest;
use ChromeDevtoolsProtocol\Model\Page\AddScriptToEvaluateOnLoadResponse;
use ChromeDevtoolsProtocol\Model\Page\AddScriptToEvaluateOnNewDocumentRequest;
use ChromeDevtoolsProtocol\Model\Page\AddScriptToEvaluateOnNewDocumentResponse;
use ChromeDevtoolsProtocol\Model\Page\BackForwardCacheNotUsedEvent;
use ChromeDevtoolsProtocol\Model\Page\CaptureScreenshotRequest;
use ChromeDevtoolsProtocol\Model\Page\CaptureScreenshotResponse;
use ChromeDevtoolsProtocol\Model\Page\CaptureSnapshotRequest;
use ChromeDevtoolsProtocol\Model\Page\CaptureSnapshotResponse;
use ChromeDevtoolsProtocol\Model\Page\CompilationCacheProducedEvent;
use ChromeDevtoolsProtocol\Model\Page\CreateIsolatedWorldRequest;
use ChromeDevtoolsProtocol\Model\Page\CreateIsolatedWorldResponse;
use ChromeDevtoolsProtocol\Model\Page\DeleteCookieRequest;
use ChromeDevtoolsProtocol\Model\Page\DocumentOpenedEvent;
use ChromeDevtoolsProtocol\Model\Page\DomContentEventFiredEvent;
use ChromeDevtoolsProtocol\Model\Page\DownloadProgressEvent;
use ChromeDevtoolsProtocol\Model\Page\DownloadWillBeginEvent;
use ChromeDevtoolsProtocol\Model\Page\FileChooserOpenedEvent;
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
use ChromeDevtoolsProtocol\Model\Page\GetAdScriptIdRequest;
use ChromeDevtoolsProtocol\Model\Page\GetAdScriptIdResponse;
use ChromeDevtoolsProtocol\Model\Page\GetAppIdResponse;
use ChromeDevtoolsProtocol\Model\Page\GetAppManifestResponse;
use ChromeDevtoolsProtocol\Model\Page\GetCookiesResponse;
use ChromeDevtoolsProtocol\Model\Page\GetFrameTreeResponse;
use ChromeDevtoolsProtocol\Model\Page\GetInstallabilityErrorsResponse;
use ChromeDevtoolsProtocol\Model\Page\GetLayoutMetricsResponse;
use ChromeDevtoolsProtocol\Model\Page\GetManifestIconsResponse;
use ChromeDevtoolsProtocol\Model\Page\GetNavigationHistoryResponse;
use ChromeDevtoolsProtocol\Model\Page\GetOriginTrialsRequest;
use ChromeDevtoolsProtocol\Model\Page\GetOriginTrialsResponse;
use ChromeDevtoolsProtocol\Model\Page\GetPermissionsPolicyStateRequest;
use ChromeDevtoolsProtocol\Model\Page\GetPermissionsPolicyStateResponse;
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
use ChromeDevtoolsProtocol\Model\Page\ProduceCompilationCacheRequest;
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
use ChromeDevtoolsProtocol\Model\Page\SetInterceptFileChooserDialogRequest;
use ChromeDevtoolsProtocol\Model\Page\SetLifecycleEventsEnabledRequest;
use ChromeDevtoolsProtocol\Model\Page\SetRPHRegistrationModeRequest;
use ChromeDevtoolsProtocol\Model\Page\SetSPCTransactionModeRequest;
use ChromeDevtoolsProtocol\Model\Page\SetTouchEmulationEnabledRequest;
use ChromeDevtoolsProtocol\Model\Page\SetWebLifecycleStateRequest;
use ChromeDevtoolsProtocol\Model\Page\StartScreencastRequest;
use ChromeDevtoolsProtocol\Model\Page\WindowOpenEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class PageDomain implements PageDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function addCompilationCache(ContextInterface $ctx, AddCompilationCacheRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.addCompilationCache', $request);
	}


	public function addScriptToEvaluateOnLoad(
		ContextInterface $ctx,
		AddScriptToEvaluateOnLoadRequest $request
	): AddScriptToEvaluateOnLoadResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Page.addScriptToEvaluateOnLoad', $request);
		return AddScriptToEvaluateOnLoadResponse::fromJson($response);
	}


	public function addScriptToEvaluateOnNewDocument(
		ContextInterface $ctx,
		AddScriptToEvaluateOnNewDocumentRequest $request
	): AddScriptToEvaluateOnNewDocumentResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Page.addScriptToEvaluateOnNewDocument', $request);
		return AddScriptToEvaluateOnNewDocumentResponse::fromJson($response);
	}


	public function bringToFront(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Page.bringToFront', $request);
	}


	public function captureScreenshot(ContextInterface $ctx, CaptureScreenshotRequest $request): CaptureScreenshotResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Page.captureScreenshot', $request);
		return CaptureScreenshotResponse::fromJson($response);
	}


	public function captureSnapshot(ContextInterface $ctx, CaptureSnapshotRequest $request): CaptureSnapshotResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Page.captureSnapshot', $request);
		return CaptureSnapshotResponse::fromJson($response);
	}


	public function clearCompilationCache(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Page.clearCompilationCache', $request);
	}


	public function clearDeviceMetricsOverride(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Page.clearDeviceMetricsOverride', $request);
	}


	public function clearDeviceOrientationOverride(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Page.clearDeviceOrientationOverride', $request);
	}


	public function clearGeolocationOverride(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Page.clearGeolocationOverride', $request);
	}


	public function close(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Page.close', $request);
	}


	public function crash(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Page.crash', $request);
	}


	public function createIsolatedWorld(
		ContextInterface $ctx,
		CreateIsolatedWorldRequest $request
	): CreateIsolatedWorldResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Page.createIsolatedWorld', $request);
		return CreateIsolatedWorldResponse::fromJson($response);
	}


	public function deleteCookie(ContextInterface $ctx, DeleteCookieRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.deleteCookie', $request);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Page.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Page.enable', $request);
	}


	public function generateTestReport(ContextInterface $ctx, GenerateTestReportRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.generateTestReport', $request);
	}


	public function getAdScriptId(ContextInterface $ctx, GetAdScriptIdRequest $request): GetAdScriptIdResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Page.getAdScriptId', $request);
		return GetAdScriptIdResponse::fromJson($response);
	}


	public function getAppId(ContextInterface $ctx): GetAppIdResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Page.getAppId', $request);
		return GetAppIdResponse::fromJson($response);
	}


	public function getAppManifest(ContextInterface $ctx): GetAppManifestResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Page.getAppManifest', $request);
		return GetAppManifestResponse::fromJson($response);
	}


	public function getCookies(ContextInterface $ctx): GetCookiesResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Page.getCookies', $request);
		return GetCookiesResponse::fromJson($response);
	}


	public function getFrameTree(ContextInterface $ctx): GetFrameTreeResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Page.getFrameTree', $request);
		return GetFrameTreeResponse::fromJson($response);
	}


	public function getInstallabilityErrors(ContextInterface $ctx): GetInstallabilityErrorsResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Page.getInstallabilityErrors', $request);
		return GetInstallabilityErrorsResponse::fromJson($response);
	}


	public function getLayoutMetrics(ContextInterface $ctx): GetLayoutMetricsResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Page.getLayoutMetrics', $request);
		return GetLayoutMetricsResponse::fromJson($response);
	}


	public function getManifestIcons(ContextInterface $ctx): GetManifestIconsResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Page.getManifestIcons', $request);
		return GetManifestIconsResponse::fromJson($response);
	}


	public function getNavigationHistory(ContextInterface $ctx): GetNavigationHistoryResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Page.getNavigationHistory', $request);
		return GetNavigationHistoryResponse::fromJson($response);
	}


	public function getOriginTrials(ContextInterface $ctx, GetOriginTrialsRequest $request): GetOriginTrialsResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Page.getOriginTrials', $request);
		return GetOriginTrialsResponse::fromJson($response);
	}


	public function getPermissionsPolicyState(
		ContextInterface $ctx,
		GetPermissionsPolicyStateRequest $request
	): GetPermissionsPolicyStateResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Page.getPermissionsPolicyState', $request);
		return GetPermissionsPolicyStateResponse::fromJson($response);
	}


	public function getResourceContent(
		ContextInterface $ctx,
		GetResourceContentRequest $request
	): GetResourceContentResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Page.getResourceContent', $request);
		return GetResourceContentResponse::fromJson($response);
	}


	public function getResourceTree(ContextInterface $ctx): GetResourceTreeResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Page.getResourceTree', $request);
		return GetResourceTreeResponse::fromJson($response);
	}


	public function handleJavaScriptDialog(ContextInterface $ctx, HandleJavaScriptDialogRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.handleJavaScriptDialog', $request);
	}


	public function navigate(ContextInterface $ctx, NavigateRequest $request): NavigateResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Page.navigate', $request);
		return NavigateResponse::fromJson($response);
	}


	public function navigateToHistoryEntry(ContextInterface $ctx, NavigateToHistoryEntryRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.navigateToHistoryEntry', $request);
	}


	public function printToPDF(ContextInterface $ctx, PrintToPDFRequest $request): PrintToPDFResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Page.printToPDF', $request);
		return PrintToPDFResponse::fromJson($response);
	}


	public function produceCompilationCache(ContextInterface $ctx, ProduceCompilationCacheRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.produceCompilationCache', $request);
	}


	public function reload(ContextInterface $ctx, ReloadRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.reload', $request);
	}


	public function removeScriptToEvaluateOnLoad(ContextInterface $ctx, RemoveScriptToEvaluateOnLoadRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.removeScriptToEvaluateOnLoad', $request);
	}


	public function removeScriptToEvaluateOnNewDocument(
		ContextInterface $ctx,
		RemoveScriptToEvaluateOnNewDocumentRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Page.removeScriptToEvaluateOnNewDocument', $request);
	}


	public function resetNavigationHistory(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Page.resetNavigationHistory', $request);
	}


	public function screencastFrameAck(ContextInterface $ctx, ScreencastFrameAckRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.screencastFrameAck', $request);
	}


	public function searchInResource(ContextInterface $ctx, SearchInResourceRequest $request): SearchInResourceResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Page.searchInResource', $request);
		return SearchInResourceResponse::fromJson($response);
	}


	public function setAdBlockingEnabled(ContextInterface $ctx, SetAdBlockingEnabledRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.setAdBlockingEnabled', $request);
	}


	public function setBypassCSP(ContextInterface $ctx, SetBypassCSPRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.setBypassCSP', $request);
	}


	public function setDeviceMetricsOverride(ContextInterface $ctx, SetDeviceMetricsOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.setDeviceMetricsOverride', $request);
	}


	public function setDeviceOrientationOverride(ContextInterface $ctx, SetDeviceOrientationOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.setDeviceOrientationOverride', $request);
	}


	public function setDocumentContent(ContextInterface $ctx, SetDocumentContentRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.setDocumentContent', $request);
	}


	public function setDownloadBehavior(ContextInterface $ctx, SetDownloadBehaviorRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.setDownloadBehavior', $request);
	}


	public function setFontFamilies(ContextInterface $ctx, SetFontFamiliesRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.setFontFamilies', $request);
	}


	public function setFontSizes(ContextInterface $ctx, SetFontSizesRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.setFontSizes', $request);
	}


	public function setGeolocationOverride(ContextInterface $ctx, SetGeolocationOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.setGeolocationOverride', $request);
	}


	public function setInterceptFileChooserDialog(
		ContextInterface $ctx,
		SetInterceptFileChooserDialogRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Page.setInterceptFileChooserDialog', $request);
	}


	public function setLifecycleEventsEnabled(ContextInterface $ctx, SetLifecycleEventsEnabledRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.setLifecycleEventsEnabled', $request);
	}


	public function setRPHRegistrationMode(ContextInterface $ctx, SetRPHRegistrationModeRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.setRPHRegistrationMode', $request);
	}


	public function setSPCTransactionMode(ContextInterface $ctx, SetSPCTransactionModeRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.setSPCTransactionMode', $request);
	}


	public function setTouchEmulationEnabled(ContextInterface $ctx, SetTouchEmulationEnabledRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.setTouchEmulationEnabled', $request);
	}


	public function setWebLifecycleState(ContextInterface $ctx, SetWebLifecycleStateRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.setWebLifecycleState', $request);
	}


	public function startScreencast(ContextInterface $ctx, StartScreencastRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Page.startScreencast', $request);
	}


	public function stopLoading(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Page.stopLoading', $request);
	}


	public function stopScreencast(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Page.stopScreencast', $request);
	}


	public function waitForDebugger(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Page.waitForDebugger', $request);
	}


	public function addBackForwardCacheNotUsedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.backForwardCacheNotUsed', function ($event) use ($listener) {
			return $listener(BackForwardCacheNotUsedEvent::fromJson($event));
		});
	}


	public function awaitBackForwardCacheNotUsed(ContextInterface $ctx): BackForwardCacheNotUsedEvent
	{
		return BackForwardCacheNotUsedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.backForwardCacheNotUsed'));
	}


	public function addCompilationCacheProducedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.compilationCacheProduced', function ($event) use ($listener) {
			return $listener(CompilationCacheProducedEvent::fromJson($event));
		});
	}


	public function awaitCompilationCacheProduced(ContextInterface $ctx): CompilationCacheProducedEvent
	{
		return CompilationCacheProducedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.compilationCacheProduced'));
	}


	public function addDocumentOpenedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.documentOpened', function ($event) use ($listener) {
			return $listener(DocumentOpenedEvent::fromJson($event));
		});
	}


	public function awaitDocumentOpened(ContextInterface $ctx): DocumentOpenedEvent
	{
		return DocumentOpenedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.documentOpened'));
	}


	public function addDomContentEventFiredListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.domContentEventFired', function ($event) use ($listener) {
			return $listener(DomContentEventFiredEvent::fromJson($event));
		});
	}


	public function awaitDomContentEventFired(ContextInterface $ctx): DomContentEventFiredEvent
	{
		return DomContentEventFiredEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.domContentEventFired'));
	}


	public function addDownloadProgressListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.downloadProgress', function ($event) use ($listener) {
			return $listener(DownloadProgressEvent::fromJson($event));
		});
	}


	public function awaitDownloadProgress(ContextInterface $ctx): DownloadProgressEvent
	{
		return DownloadProgressEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.downloadProgress'));
	}


	public function addDownloadWillBeginListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.downloadWillBegin', function ($event) use ($listener) {
			return $listener(DownloadWillBeginEvent::fromJson($event));
		});
	}


	public function awaitDownloadWillBegin(ContextInterface $ctx): DownloadWillBeginEvent
	{
		return DownloadWillBeginEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.downloadWillBegin'));
	}


	public function addFileChooserOpenedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.fileChooserOpened', function ($event) use ($listener) {
			return $listener(FileChooserOpenedEvent::fromJson($event));
		});
	}


	public function awaitFileChooserOpened(ContextInterface $ctx): FileChooserOpenedEvent
	{
		return FileChooserOpenedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.fileChooserOpened'));
	}


	public function addFrameAttachedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.frameAttached', function ($event) use ($listener) {
			return $listener(FrameAttachedEvent::fromJson($event));
		});
	}


	public function awaitFrameAttached(ContextInterface $ctx): FrameAttachedEvent
	{
		return FrameAttachedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.frameAttached'));
	}


	public function addFrameClearedScheduledNavigationListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.frameClearedScheduledNavigation', function ($event) use ($listener) {
			return $listener(FrameClearedScheduledNavigationEvent::fromJson($event));
		});
	}


	public function awaitFrameClearedScheduledNavigation(ContextInterface $ctx): FrameClearedScheduledNavigationEvent
	{
		return FrameClearedScheduledNavigationEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.frameClearedScheduledNavigation'));
	}


	public function addFrameDetachedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.frameDetached', function ($event) use ($listener) {
			return $listener(FrameDetachedEvent::fromJson($event));
		});
	}


	public function awaitFrameDetached(ContextInterface $ctx): FrameDetachedEvent
	{
		return FrameDetachedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.frameDetached'));
	}


	public function addFrameNavigatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.frameNavigated', function ($event) use ($listener) {
			return $listener(FrameNavigatedEvent::fromJson($event));
		});
	}


	public function awaitFrameNavigated(ContextInterface $ctx): FrameNavigatedEvent
	{
		return FrameNavigatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.frameNavigated'));
	}


	public function addFrameRequestedNavigationListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.frameRequestedNavigation', function ($event) use ($listener) {
			return $listener(FrameRequestedNavigationEvent::fromJson($event));
		});
	}


	public function awaitFrameRequestedNavigation(ContextInterface $ctx): FrameRequestedNavigationEvent
	{
		return FrameRequestedNavigationEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.frameRequestedNavigation'));
	}


	public function addFrameResizedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.frameResized', function ($event) use ($listener) {
			return $listener(FrameResizedEvent::fromJson($event));
		});
	}


	public function awaitFrameResized(ContextInterface $ctx): FrameResizedEvent
	{
		return FrameResizedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.frameResized'));
	}


	public function addFrameScheduledNavigationListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.frameScheduledNavigation', function ($event) use ($listener) {
			return $listener(FrameScheduledNavigationEvent::fromJson($event));
		});
	}


	public function awaitFrameScheduledNavigation(ContextInterface $ctx): FrameScheduledNavigationEvent
	{
		return FrameScheduledNavigationEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.frameScheduledNavigation'));
	}


	public function addFrameStartedLoadingListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.frameStartedLoading', function ($event) use ($listener) {
			return $listener(FrameStartedLoadingEvent::fromJson($event));
		});
	}


	public function awaitFrameStartedLoading(ContextInterface $ctx): FrameStartedLoadingEvent
	{
		return FrameStartedLoadingEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.frameStartedLoading'));
	}


	public function addFrameStoppedLoadingListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.frameStoppedLoading', function ($event) use ($listener) {
			return $listener(FrameStoppedLoadingEvent::fromJson($event));
		});
	}


	public function awaitFrameStoppedLoading(ContextInterface $ctx): FrameStoppedLoadingEvent
	{
		return FrameStoppedLoadingEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.frameStoppedLoading'));
	}


	public function addInterstitialHiddenListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.interstitialHidden', function ($event) use ($listener) {
			return $listener(InterstitialHiddenEvent::fromJson($event));
		});
	}


	public function awaitInterstitialHidden(ContextInterface $ctx): InterstitialHiddenEvent
	{
		return InterstitialHiddenEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.interstitialHidden'));
	}


	public function addInterstitialShownListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.interstitialShown', function ($event) use ($listener) {
			return $listener(InterstitialShownEvent::fromJson($event));
		});
	}


	public function awaitInterstitialShown(ContextInterface $ctx): InterstitialShownEvent
	{
		return InterstitialShownEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.interstitialShown'));
	}


	public function addJavascriptDialogClosedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.javascriptDialogClosed', function ($event) use ($listener) {
			return $listener(JavascriptDialogClosedEvent::fromJson($event));
		});
	}


	public function awaitJavascriptDialogClosed(ContextInterface $ctx): JavascriptDialogClosedEvent
	{
		return JavascriptDialogClosedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.javascriptDialogClosed'));
	}


	public function addJavascriptDialogOpeningListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.javascriptDialogOpening', function ($event) use ($listener) {
			return $listener(JavascriptDialogOpeningEvent::fromJson($event));
		});
	}


	public function awaitJavascriptDialogOpening(ContextInterface $ctx): JavascriptDialogOpeningEvent
	{
		return JavascriptDialogOpeningEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.javascriptDialogOpening'));
	}


	public function addLifecycleEventListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.lifecycleEvent', function ($event) use ($listener) {
			return $listener(LifecycleEventEvent::fromJson($event));
		});
	}


	public function awaitLifecycleEvent(ContextInterface $ctx): LifecycleEventEvent
	{
		return LifecycleEventEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.lifecycleEvent'));
	}


	public function addLoadEventFiredListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.loadEventFired', function ($event) use ($listener) {
			return $listener(LoadEventFiredEvent::fromJson($event));
		});
	}


	public function awaitLoadEventFired(ContextInterface $ctx): LoadEventFiredEvent
	{
		return LoadEventFiredEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.loadEventFired'));
	}


	public function addNavigatedWithinDocumentListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.navigatedWithinDocument', function ($event) use ($listener) {
			return $listener(NavigatedWithinDocumentEvent::fromJson($event));
		});
	}


	public function awaitNavigatedWithinDocument(ContextInterface $ctx): NavigatedWithinDocumentEvent
	{
		return NavigatedWithinDocumentEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.navigatedWithinDocument'));
	}


	public function addScreencastFrameListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.screencastFrame', function ($event) use ($listener) {
			return $listener(ScreencastFrameEvent::fromJson($event));
		});
	}


	public function awaitScreencastFrame(ContextInterface $ctx): ScreencastFrameEvent
	{
		return ScreencastFrameEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.screencastFrame'));
	}


	public function addScreencastVisibilityChangedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.screencastVisibilityChanged', function ($event) use ($listener) {
			return $listener(ScreencastVisibilityChangedEvent::fromJson($event));
		});
	}


	public function awaitScreencastVisibilityChanged(ContextInterface $ctx): ScreencastVisibilityChangedEvent
	{
		return ScreencastVisibilityChangedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.screencastVisibilityChanged'));
	}


	public function addWindowOpenListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Page.windowOpen', function ($event) use ($listener) {
			return $listener(WindowOpenEvent::fromJson($event));
		});
	}


	public function awaitWindowOpen(ContextInterface $ctx): WindowOpenEvent
	{
		return WindowOpenEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Page.windowOpen'));
	}
}
