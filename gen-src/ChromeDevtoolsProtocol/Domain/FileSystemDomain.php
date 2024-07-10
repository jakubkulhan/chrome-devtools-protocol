<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\FileSystem\GetDirectoryRequest;
use ChromeDevtoolsProtocol\Model\FileSystem\GetDirectoryResponse;

class FileSystemDomain implements FileSystemDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function getDirectory(ContextInterface $ctx, GetDirectoryRequest $request): GetDirectoryResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'FileSystem.getDirectory', $request);
		return GetDirectoryResponse::fromJson($response);
	}
}
