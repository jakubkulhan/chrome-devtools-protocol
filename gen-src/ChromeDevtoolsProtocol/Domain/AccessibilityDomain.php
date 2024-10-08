<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Accessibility\GetAXNodeAndAncestorsRequest;
use ChromeDevtoolsProtocol\Model\Accessibility\GetAXNodeAndAncestorsResponse;
use ChromeDevtoolsProtocol\Model\Accessibility\GetChildAXNodesRequest;
use ChromeDevtoolsProtocol\Model\Accessibility\GetChildAXNodesResponse;
use ChromeDevtoolsProtocol\Model\Accessibility\GetFullAXTreeRequest;
use ChromeDevtoolsProtocol\Model\Accessibility\GetFullAXTreeResponse;
use ChromeDevtoolsProtocol\Model\Accessibility\GetPartialAXTreeRequest;
use ChromeDevtoolsProtocol\Model\Accessibility\GetPartialAXTreeResponse;
use ChromeDevtoolsProtocol\Model\Accessibility\GetRootAXNodeRequest;
use ChromeDevtoolsProtocol\Model\Accessibility\GetRootAXNodeResponse;
use ChromeDevtoolsProtocol\Model\Accessibility\LoadCompleteEvent;
use ChromeDevtoolsProtocol\Model\Accessibility\NodesUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Accessibility\QueryAXTreeRequest;
use ChromeDevtoolsProtocol\Model\Accessibility\QueryAXTreeResponse;
use ChromeDevtoolsProtocol\SubscriptionInterface;

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


	public function getAXNodeAndAncestors(
		ContextInterface $ctx,
		GetAXNodeAndAncestorsRequest $request
	): GetAXNodeAndAncestorsResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Accessibility.getAXNodeAndAncestors', $request);
		return GetAXNodeAndAncestorsResponse::fromJson($response);
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


	public function getRootAXNode(ContextInterface $ctx, GetRootAXNodeRequest $request): GetRootAXNodeResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Accessibility.getRootAXNode', $request);
		return GetRootAXNodeResponse::fromJson($response);
	}


	public function queryAXTree(ContextInterface $ctx, QueryAXTreeRequest $request): QueryAXTreeResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Accessibility.queryAXTree', $request);
		return QueryAXTreeResponse::fromJson($response);
	}


	public function addLoadCompleteListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Accessibility.loadComplete', function ($event) use ($listener) {
			return $listener(LoadCompleteEvent::fromJson($event));
		});
	}


	public function awaitLoadComplete(ContextInterface $ctx): LoadCompleteEvent
	{
		return LoadCompleteEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Accessibility.loadComplete'));
	}


	public function addNodesUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Accessibility.nodesUpdated', function ($event) use ($listener) {
			return $listener(NodesUpdatedEvent::fromJson($event));
		});
	}


	public function awaitNodesUpdated(ContextInterface $ctx): NodesUpdatedEvent
	{
		return NodesUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Accessibility.nodesUpdated'));
	}
}
