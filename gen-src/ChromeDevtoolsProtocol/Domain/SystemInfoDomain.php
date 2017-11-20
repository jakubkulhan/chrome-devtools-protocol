<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\SystemInfo\GetInfoResponse;

class SystemInfoDomain implements SystemInfoDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function getInfo(ContextInterface $ctx): GetInfoResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'SystemInfo.getInfo', $request);
		return GetInfoResponse::fromJson($response);
	}
}
