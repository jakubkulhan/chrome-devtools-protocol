<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
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
use ChromeDevtoolsProtocol\Model\Browser\SetWindowBoundsRequest;

class BrowserDomain implements BrowserDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function close(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Browser.close', $request);
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


	public function getWindowForTarget(ContextInterface $ctx, GetWindowForTargetRequest $request): GetWindowForTargetResponse
	{
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


	public function setWindowBounds(ContextInterface $ctx, SetWindowBoundsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Browser.setWindowBounds', $request);
	}
}
