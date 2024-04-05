<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\PWA\GetOsAppStateRequest;
use ChromeDevtoolsProtocol\Model\PWA\GetOsAppStateResponse;

class PWADomain implements PWADomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function getOsAppState(ContextInterface $ctx, GetOsAppStateRequest $request): GetOsAppStateResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'PWA.getOsAppState', $request);
		return GetOsAppStateResponse::fromJson($response);
	}
}
