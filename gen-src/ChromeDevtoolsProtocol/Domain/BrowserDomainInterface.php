<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Browser\AddPrivacySandboxCoordinatorKeyConfigRequest;
use ChromeDevtoolsProtocol\Model\Browser\AddPrivacySandboxEnrollmentOverrideRequest;
use ChromeDevtoolsProtocol\Model\Browser\CancelDownloadRequest;
use ChromeDevtoolsProtocol\Model\Browser\DownloadProgressEvent;
use ChromeDevtoolsProtocol\Model\Browser\DownloadWillBeginEvent;
use ChromeDevtoolsProtocol\Model\Browser\ExecuteBrowserCommandRequest;
use ChromeDevtoolsProtocol\Model\Browser\GetBrowserCommandLineResponse;
use ChromeDevtoolsProtocol\Model\Browser\GetHistogramRequest;
use ChromeDevtoolsProtocol\Model\Browser\GetHistogramResponse;
use ChromeDevtoolsProtocol\Model\Browser\GetHistogramsRequest;
use ChromeDevtoolsProtocol\Model\Browser\GetHistogramsResponse;
use ChromeDevtoolsProtocol\Model\Browser\GetVersionResponse;
use ChromeDevtoolsProtocol\Model\Browser\GetWindowBoundsRequest;
use ChromeDevtoolsProtocol\Model\Browser\GetWindowBoundsResponse;
use ChromeDevtoolsProtocol\Model\Browser\GetWindowForTargetRequest;
use ChromeDevtoolsProtocol\Model\Browser\GetWindowForTargetResponse;
use ChromeDevtoolsProtocol\Model\Browser\GrantPermissionsRequest;
use ChromeDevtoolsProtocol\Model\Browser\ResetPermissionsRequest;
use ChromeDevtoolsProtocol\Model\Browser\SetContentsSizeRequest;
use ChromeDevtoolsProtocol\Model\Browser\SetDockTileRequest;
use ChromeDevtoolsProtocol\Model\Browser\SetDownloadBehaviorRequest;
use ChromeDevtoolsProtocol\Model\Browser\SetPermissionRequest;
use ChromeDevtoolsProtocol\Model\Browser\SetWindowBoundsRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * The Browser domain defines methods and events for browser managing.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface BrowserDomainInterface
{
	/**
	 * Configures encryption keys used with a given privacy sandbox API to talk to a trusted coordinator. Since this is intended for test automation only, coordinatorOrigin must be a .test domain. No existing coordinator configuration for the origin may exist.
	 *
	 * @param ContextInterface $ctx
	 * @param AddPrivacySandboxCoordinatorKeyConfigRequest $request
	 *
	 * @return void
	 */
	public function addPrivacySandboxCoordinatorKeyConfig(
		ContextInterface $ctx,
		AddPrivacySandboxCoordinatorKeyConfigRequest $request
	): void;


	/**
	 * Allows a site to use privacy sandbox features that require enrollment without the site actually being enrolled. Only supported on page targets.
	 *
	 * @param ContextInterface $ctx
	 * @param AddPrivacySandboxEnrollmentOverrideRequest $request
	 *
	 * @return void
	 */
	public function addPrivacySandboxEnrollmentOverride(
		ContextInterface $ctx,
		AddPrivacySandboxEnrollmentOverrideRequest $request
	): void;


	/**
	 * Cancel a download if in progress
	 *
	 * @param ContextInterface $ctx
	 * @param CancelDownloadRequest $request
	 *
	 * @return void
	 */
	public function cancelDownload(ContextInterface $ctx, CancelDownloadRequest $request): void;


	/**
	 * Close browser gracefully.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function close(ContextInterface $ctx): void;


	/**
	 * Crashes browser on the main thread.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function crash(ContextInterface $ctx): void;


	/**
	 * Crashes GPU process.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function crashGpuProcess(ContextInterface $ctx): void;


	/**
	 * Invoke custom browser commands used by telemetry.
	 *
	 * @param ContextInterface $ctx
	 * @param ExecuteBrowserCommandRequest $request
	 *
	 * @return void
	 */
	public function executeBrowserCommand(ContextInterface $ctx, ExecuteBrowserCommandRequest $request): void;


	/**
	 * Returns the command line switches for the browser process if, and only if --enable-automation is on the commandline.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetBrowserCommandLineResponse
	 */
	public function getBrowserCommandLine(ContextInterface $ctx): GetBrowserCommandLineResponse;


	/**
	 * Get a Chrome histogram by name.
	 *
	 * @param ContextInterface $ctx
	 * @param GetHistogramRequest $request
	 *
	 * @return GetHistogramResponse
	 */
	public function getHistogram(ContextInterface $ctx, GetHistogramRequest $request): GetHistogramResponse;


	/**
	 * Get Chrome histograms.
	 *
	 * @param ContextInterface $ctx
	 * @param GetHistogramsRequest $request
	 *
	 * @return GetHistogramsResponse
	 */
	public function getHistograms(ContextInterface $ctx, GetHistogramsRequest $request): GetHistogramsResponse;


	/**
	 * Returns version information.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetVersionResponse
	 */
	public function getVersion(ContextInterface $ctx): GetVersionResponse;


	/**
	 * Get position and size of the browser window.
	 *
	 * @param ContextInterface $ctx
	 * @param GetWindowBoundsRequest $request
	 *
	 * @return GetWindowBoundsResponse
	 */
	public function getWindowBounds(ContextInterface $ctx, GetWindowBoundsRequest $request): GetWindowBoundsResponse;


	/**
	 * Get the browser window that contains the devtools target.
	 *
	 * @param ContextInterface $ctx
	 * @param GetWindowForTargetRequest $request
	 *
	 * @return GetWindowForTargetResponse
	 */
	public function getWindowForTarget(
		ContextInterface $ctx,
		GetWindowForTargetRequest $request
	): GetWindowForTargetResponse;


	/**
	 * Grant specific permissions to the given origin and reject all others.
	 *
	 * @param ContextInterface $ctx
	 * @param GrantPermissionsRequest $request
	 *
	 * @return void
	 */
	public function grantPermissions(ContextInterface $ctx, GrantPermissionsRequest $request): void;


	/**
	 * Reset all permission management for all origins.
	 *
	 * @param ContextInterface $ctx
	 * @param ResetPermissionsRequest $request
	 *
	 * @return void
	 */
	public function resetPermissions(ContextInterface $ctx, ResetPermissionsRequest $request): void;


	/**
	 * Set size of the browser contents resizing browser window as necessary.
	 *
	 * @param ContextInterface $ctx
	 * @param SetContentsSizeRequest $request
	 *
	 * @return void
	 */
	public function setContentsSize(ContextInterface $ctx, SetContentsSizeRequest $request): void;


	/**
	 * Set dock tile details, platform-specific.
	 *
	 * @param ContextInterface $ctx
	 * @param SetDockTileRequest $request
	 *
	 * @return void
	 */
	public function setDockTile(ContextInterface $ctx, SetDockTileRequest $request): void;


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
	 * Set permission settings for given origin.
	 *
	 * @param ContextInterface $ctx
	 * @param SetPermissionRequest $request
	 *
	 * @return void
	 */
	public function setPermission(ContextInterface $ctx, SetPermissionRequest $request): void;


	/**
	 * Set position and/or size of the browser window.
	 *
	 * @param ContextInterface $ctx
	 * @param SetWindowBoundsRequest $request
	 *
	 * @return void
	 */
	public function setWindowBounds(ContextInterface $ctx, SetWindowBoundsRequest $request): void;


	/**
	 * Fired when download makes progress. Last call has |done| == true.
	 *
	 * Listener will be called whenever event Browser.downloadProgress is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDownloadProgressListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when download makes progress. Last call has |done| == true.
	 *
	 * Method will block until first Browser.downloadProgress event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DownloadProgressEvent
	 */
	public function awaitDownloadProgress(ContextInterface $ctx): DownloadProgressEvent;


	/**
	 * Fired when page is about to start a download.
	 *
	 * Listener will be called whenever event Browser.downloadWillBegin is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDownloadWillBeginListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when page is about to start a download.
	 *
	 * Method will block until first Browser.downloadWillBegin event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DownloadWillBeginEvent
	 */
	public function awaitDownloadWillBegin(ContextInterface $ctx): DownloadWillBeginEvent;
}
