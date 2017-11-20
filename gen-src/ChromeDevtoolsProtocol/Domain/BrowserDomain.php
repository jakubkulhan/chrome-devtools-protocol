<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Browser\GetVersionResponse;
use ChromeDevtoolsProtocol\Model\Browser\GetWindowBoundsRequest;
use ChromeDevtoolsProtocol\Model\Browser\GetWindowBoundsResponse;
use ChromeDevtoolsProtocol\Model\Browser\GetWindowForTargetRequest;
use ChromeDevtoolsProtocol\Model\Browser\GetWindowForTargetResponse;
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


	public function getWindowForTarget(ContextInterface $ctx, GetWindowForTargetRequest $request): GetWindowForTargetResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Browser.getWindowForTarget', $request);
		return GetWindowForTargetResponse::fromJson($response);
	}


	public function getVersion(ContextInterface $ctx): GetVersionResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Browser.getVersion', $request);
		return GetVersionResponse::fromJson($response);
	}


	public function setWindowBounds(ContextInterface $ctx, SetWindowBoundsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Browser.setWindowBounds', $request);
	}


	public function getWindowBounds(ContextInterface $ctx, GetWindowBoundsRequest $request): GetWindowBoundsResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Browser.getWindowBounds', $request);
		return GetWindowBoundsResponse::fromJson($response);
	}
}
