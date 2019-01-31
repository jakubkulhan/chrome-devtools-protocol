<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Accessibility\GetFullAXTreeResponse;
use ChromeDevtoolsProtocol\Model\Accessibility\GetPartialAXTreeRequest;
use ChromeDevtoolsProtocol\Model\Accessibility\GetPartialAXTreeResponse;

class AccessibilityDomain implements AccessibilityDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Accessibility.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Accessibility.enable', $request);
	}


	public function getFullAXTree(ContextInterface $ctx): GetFullAXTreeResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Accessibility.getFullAXTree', $request);
		return GetFullAXTreeResponse::fromJson($response);
	}


	public function getPartialAXTree(ContextInterface $ctx, GetPartialAXTreeRequest $request): GetPartialAXTreeResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Accessibility.getPartialAXTree', $request);
		return GetPartialAXTreeResponse::fromJson($response);
	}
}
