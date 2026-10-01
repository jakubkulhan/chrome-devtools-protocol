<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\FindInPage\FindFirstRequest;

class FindInPageDomain implements FindInPageDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function findFirst(ContextInterface $ctx, FindFirstRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'FindInPage.findFirst', $request);
	}


	public function findNext(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'FindInPage.findNext', $request);
	}


	public function findPrev(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'FindInPage.findPrev', $request);
	}


	public function stop(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'FindInPage.stop', $request);
	}
}
