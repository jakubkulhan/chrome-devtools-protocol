<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\CrashReportContext\GetEntriesResponse;

class CrashReportContextDomain implements CrashReportContextDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function getEntries(ContextInterface $ctx): GetEntriesResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'CrashReportContext.getEntries', $request);
		return GetEntriesResponse::fromJson($response);
	}
}
