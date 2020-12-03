<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Accessibility\GetChildAXNodesRequest;
use ChromeDevtoolsProtocol\Model\Accessibility\GetChildAXNodesResponse;
use ChromeDevtoolsProtocol\Model\Accessibility\GetFullAXTreeRequest;
use ChromeDevtoolsProtocol\Model\Accessibility\GetFullAXTreeResponse;
use ChromeDevtoolsProtocol\Model\Accessibility\GetPartialAXTreeRequest;
use ChromeDevtoolsProtocol\Model\Accessibility\GetPartialAXTreeResponse;
use ChromeDevtoolsProtocol\Model\Accessibility\QueryAXTreeRequest;
use ChromeDevtoolsProtocol\Model\Accessibility\QueryAXTreeResponse;

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


	public function getChildAXNodes(ContextInterface $ctx, GetChildAXNodesRequest $request): GetChildAXNodesResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Accessibility.getChildAXNodes', $request);
		return GetChildAXNodesResponse::fromJson($response);
	}


	public function getFullAXTree(ContextInterface $ctx, GetFullAXTreeRequest $request): GetFullAXTreeResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Accessibility.getFullAXTree', $request);
		return GetFullAXTreeResponse::fromJson($response);
	}


	public function getPartialAXTree(ContextInterface $ctx, GetPartialAXTreeRequest $request): GetPartialAXTreeResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Accessibility.getPartialAXTree', $request);
		return GetPartialAXTreeResponse::fromJson($response);
	}


	public function queryAXTree(ContextInterface $ctx, QueryAXTreeRequest $request): QueryAXTreeResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Accessibility.queryAXTree', $request);
		return QueryAXTreeResponse::fromJson($response);
	}
}
