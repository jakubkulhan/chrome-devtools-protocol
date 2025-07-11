<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
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

class BrowserDomain implements BrowserDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function addPrivacySandboxCoordinatorKeyConfig(
		ContextInterface $ctx,
		AddPrivacySandboxCoordinatorKeyConfigRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Browser.addPrivacySandboxCoordinatorKeyConfig', $request);
	}


	public function addPrivacySandboxEnrollmentOverride(
		ContextInterface $ctx,
		AddPrivacySandboxEnrollmentOverrideRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Browser.addPrivacySandboxEnrollmentOverride', $request);
	}


	public function cancelDownload(ContextInterface $ctx, CancelDownloadRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Browser.cancelDownload', $request);
	}


	public function close(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Browser.close', $request);
	}


	public function crash(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Browser.crash', $request);
	}


	public function crashGpuProcess(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Browser.crashGpuProcess', $request);
	}


	public function executeBrowserCommand(ContextInterface $ctx, ExecuteBrowserCommandRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Browser.executeBrowserCommand', $request);
	}


	public function getBrowserCommandLine(ContextInterface $ctx): GetBrowserCommandLineResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Browser.getBrowserCommandLine', $request);
		return GetBrowserCommandLineResponse::fromJson($response);
	}


	public function getHistogram(ContextInterface $ctx, GetHistogramRequest $request): GetHistogramResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Browser.getHistogram', $request);
		return GetHistogramResponse::fromJson($response);
	}


	public function getHistograms(ContextInterface $ctx, GetHistogramsRequest $request): GetHistogramsResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Browser.getHistograms', $request);
		return GetHistogramsResponse::fromJson($response);
	}


	public function getVersion(ContextInterface $ctx): GetVersionResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Browser.getVersion', $request);
		return GetVersionResponse::fromJson($response);
	}


	public function getWindowBounds(ContextInterface $ctx, GetWindowBoundsRequest $request): GetWindowBoundsResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Browser.getWindowBounds', $request);
		return GetWindowBoundsResponse::fromJson($response);
	}


	public function getWindowForTarget(
		ContextInterface $ctx,
		GetWindowForTargetRequest $request
	): GetWindowForTargetResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Browser.getWindowForTarget', $request);
		return GetWindowForTargetResponse::fromJson($response);
	}


	public function grantPermissions(ContextInterface $ctx, GrantPermissionsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Browser.grantPermissions', $request);
	}


	public function resetPermissions(ContextInterface $ctx, ResetPermissionsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Browser.resetPermissions', $request);
	}


	public function setContentsSize(ContextInterface $ctx, SetContentsSizeRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Browser.setContentsSize', $request);
	}


	public function setDockTile(ContextInterface $ctx, SetDockTileRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Browser.setDockTile', $request);
	}


	public function setDownloadBehavior(ContextInterface $ctx, SetDownloadBehaviorRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Browser.setDownloadBehavior', $request);
	}


	public function setPermission(ContextInterface $ctx, SetPermissionRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Browser.setPermission', $request);
	}


	public function setWindowBounds(ContextInterface $ctx, SetWindowBoundsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Browser.setWindowBounds', $request);
	}


	public function addDownloadProgressListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Browser.downloadProgress', function ($event) use ($listener) {
			return $listener(DownloadProgressEvent::fromJson($event));
		});
	}


	public function awaitDownloadProgress(ContextInterface $ctx): DownloadProgressEvent
	{
		return DownloadProgressEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Browser.downloadProgress'));
	}


	public function addDownloadWillBeginListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Browser.downloadWillBegin', function ($event) use ($listener) {
			return $listener(DownloadWillBeginEvent::fromJson($event));
		});
	}


	public function awaitDownloadWillBegin(ContextInterface $ctx): DownloadWillBeginEvent
	{
		return DownloadWillBeginEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Browser.downloadWillBegin'));
	}
}
