<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Extensions\LoadUnpackedRequest;
use ChromeDevtoolsProtocol\Model\Extensions\LoadUnpackedResponse;

class ExtensionsDomain implements ExtensionsDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function loadUnpacked(ContextInterface $ctx, LoadUnpackedRequest $request): LoadUnpackedResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Extensions.loadUnpacked', $request);
		return LoadUnpackedResponse::fromJson($response);
	}
}
