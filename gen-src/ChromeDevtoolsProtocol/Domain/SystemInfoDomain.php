<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\SystemInfo\GetFeatureStateRequest;
use ChromeDevtoolsProtocol\Model\SystemInfo\GetFeatureStateResponse;
use ChromeDevtoolsProtocol\Model\SystemInfo\GetInfoResponse;
use ChromeDevtoolsProtocol\Model\SystemInfo\GetProcessInfoResponse;

class SystemInfoDomain implements SystemInfoDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function getFeatureState(ContextInterface $ctx, GetFeatureStateRequest $request): GetFeatureStateResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'SystemInfo.getFeatureState', $request);
		return GetFeatureStateResponse::fromJson($response);
	}


	public function getInfo(ContextInterface $ctx): GetInfoResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'SystemInfo.getInfo', $request);
		return GetInfoResponse::fromJson($response);
	}


	public function getProcessInfo(ContextInterface $ctx): GetProcessInfoResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'SystemInfo.getProcessInfo', $request);
		return GetProcessInfoResponse::fromJson($response);
	}
}
