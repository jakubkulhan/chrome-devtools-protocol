<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Testing\GenerateTestReportRequest;

class TestingDomain implements TestingDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function generateTestReport(ContextInterface $ctx, GenerateTestReportRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Testing.generateTestReport', $request);
	}
}
