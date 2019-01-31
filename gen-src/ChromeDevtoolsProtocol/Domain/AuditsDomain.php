<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Audits\GetEncodedResponseRequest;
use ChromeDevtoolsProtocol\Model\Audits\GetEncodedResponseResponse;

class AuditsDomain implements AuditsDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function getEncodedResponse(ContextInterface $ctx, GetEncodedResponseRequest $request): GetEncodedResponseResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Audits.getEncodedResponse', $request);
		return GetEncodedResponseResponse::fromJson($response);
	}
}
