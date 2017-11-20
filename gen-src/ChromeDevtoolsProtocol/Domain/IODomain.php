<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\IO\CloseRequest;
use ChromeDevtoolsProtocol\Model\IO\ReadRequest;
use ChromeDevtoolsProtocol\Model\IO\ReadResponse;
use ChromeDevtoolsProtocol\Model\IO\ResolveBlobRequest;
use ChromeDevtoolsProtocol\Model\IO\ResolveBlobResponse;

class IODomain implements IODomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function read(ContextInterface $ctx, ReadRequest $request): ReadResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'IO.read', $request);
		return ReadResponse::fromJson($response);
	}


	public function close(ContextInterface $ctx, CloseRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'IO.close', $request);
	}


	public function resolveBlob(ContextInterface $ctx, ResolveBlobRequest $request): ResolveBlobResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'IO.resolveBlob', $request);
		return ResolveBlobResponse::fromJson($response);
	}
}
