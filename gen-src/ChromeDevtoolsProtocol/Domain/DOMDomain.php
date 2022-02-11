<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\DOM\AttributeModifiedEvent;
use ChromeDevtoolsProtocol\Model\DOM\AttributeRemovedEvent;
use ChromeDevtoolsProtocol\Model\DOM\CharacterDataModifiedEvent;
use ChromeDevtoolsProtocol\Model\DOM\ChildNodeCountUpdatedEvent;
use ChromeDevtoolsProtocol\Model\DOM\ChildNodeInsertedEvent;
use ChromeDevtoolsProtocol\Model\DOM\ChildNodeRemovedEvent;
use ChromeDevtoolsProtocol\Model\DOM\CollectClassNamesFromSubtreeRequest;
use ChromeDevtoolsProtocol\Model\DOM\CollectClassNamesFromSubtreeResponse;
use ChromeDevtoolsProtocol\Model\DOM\CopyToRequest;
use ChromeDevtoolsProtocol\Model\DOM\CopyToResponse;
use ChromeDevtoolsProtocol\Model\DOM\DescribeNodeRequest;
use ChromeDevtoolsProtocol\Model\DOM\DescribeNodeResponse;
use ChromeDevtoolsProtocol\Model\DOM\DiscardSearchResultsRequest;
use ChromeDevtoolsProtocol\Model\DOM\DistributedNodesUpdatedEvent;
use ChromeDevtoolsProtocol\Model\DOM\DocumentUpdatedEvent;
use ChromeDevtoolsProtocol\Model\DOM\EnableRequest;
use ChromeDevtoolsProtocol\Model\DOM\FocusRequest;
use ChromeDevtoolsProtocol\Model\DOM\GetAttributesRequest;
use ChromeDevtoolsProtocol\Model\DOM\GetAttributesResponse;
use ChromeDevtoolsProtocol\Model\DOM\GetBoxModelRequest;
use ChromeDevtoolsProtocol\Model\DOM\GetBoxModelResponse;
use ChromeDevtoolsProtocol\Model\DOM\GetContainerForNodeRequest;
use ChromeDevtoolsProtocol\Model\DOM\GetContainerForNodeResponse;
use ChromeDevtoolsProtocol\Model\DOM\GetContentQuadsRequest;
use ChromeDevtoolsProtocol\Model\DOM\GetContentQuadsResponse;
use ChromeDevtoolsProtocol\Model\DOM\GetDocumentRequest;
use ChromeDevtoolsProtocol\Model\DOM\GetDocumentResponse;
use ChromeDevtoolsProtocol\Model\DOM\GetFileInfoRequest;
use ChromeDevtoolsProtocol\Model\DOM\GetFileInfoResponse;
use ChromeDevtoolsProtocol\Model\DOM\GetFlattenedDocumentRequest;
use ChromeDevtoolsProtocol\Model\DOM\GetFlattenedDocumentResponse;
use ChromeDevtoolsProtocol\Model\DOM\GetFrameOwnerRequest;
use ChromeDevtoolsProtocol\Model\DOM\GetFrameOwnerResponse;
use ChromeDevtoolsProtocol\Model\DOM\GetNodeForLocationRequest;
use ChromeDevtoolsProtocol\Model\DOM\GetNodeForLocationResponse;
use ChromeDevtoolsProtocol\Model\DOM\GetNodeStackTracesRequest;
use ChromeDevtoolsProtocol\Model\DOM\GetNodeStackTracesResponse;
use ChromeDevtoolsProtocol\Model\DOM\GetNodesForSubtreeByStyleRequest;
use ChromeDevtoolsProtocol\Model\DOM\GetNodesForSubtreeByStyleResponse;
use ChromeDevtoolsProtocol\Model\DOM\GetOuterHTMLRequest;
use ChromeDevtoolsProtocol\Model\DOM\GetOuterHTMLResponse;
use ChromeDevtoolsProtocol\Model\DOM\GetQueryingDescendantsForContainerRequest;
use ChromeDevtoolsProtocol\Model\DOM\GetQueryingDescendantsForContainerResponse;
use ChromeDevtoolsProtocol\Model\DOM\GetRelayoutBoundaryRequest;
use ChromeDevtoolsProtocol\Model\DOM\GetRelayoutBoundaryResponse;
use ChromeDevtoolsProtocol\Model\DOM\GetSearchResultsRequest;
use ChromeDevtoolsProtocol\Model\DOM\GetSearchResultsResponse;
use ChromeDevtoolsProtocol\Model\DOM\InlineStyleInvalidatedEvent;
use ChromeDevtoolsProtocol\Model\DOM\MoveToRequest;
use ChromeDevtoolsProtocol\Model\DOM\MoveToResponse;
use ChromeDevtoolsProtocol\Model\DOM\PerformSearchRequest;
use ChromeDevtoolsProtocol\Model\DOM\PerformSearchResponse;
use ChromeDevtoolsProtocol\Model\DOM\PseudoElementAddedEvent;
use ChromeDevtoolsProtocol\Model\DOM\PseudoElementRemovedEvent;
use ChromeDevtoolsProtocol\Model\DOM\PushNodeByPathToFrontendRequest;
use ChromeDevtoolsProtocol\Model\DOM\PushNodeByPathToFrontendResponse;
use ChromeDevtoolsProtocol\Model\DOM\PushNodesByBackendIdsToFrontendRequest;
use ChromeDevtoolsProtocol\Model\DOM\PushNodesByBackendIdsToFrontendResponse;
use ChromeDevtoolsProtocol\Model\DOM\QuerySelectorAllRequest;
use ChromeDevtoolsProtocol\Model\DOM\QuerySelectorAllResponse;
use ChromeDevtoolsProtocol\Model\DOM\QuerySelectorRequest;
use ChromeDevtoolsProtocol\Model\DOM\QuerySelectorResponse;
use ChromeDevtoolsProtocol\Model\DOM\RemoveAttributeRequest;
use ChromeDevtoolsProtocol\Model\DOM\RemoveNodeRequest;
use ChromeDevtoolsProtocol\Model\DOM\RequestChildNodesRequest;
use ChromeDevtoolsProtocol\Model\DOM\RequestNodeRequest;
use ChromeDevtoolsProtocol\Model\DOM\RequestNodeResponse;
use ChromeDevtoolsProtocol\Model\DOM\ResolveNodeRequest;
use ChromeDevtoolsProtocol\Model\DOM\ResolveNodeResponse;
use ChromeDevtoolsProtocol\Model\DOM\ScrollIntoViewIfNeededRequest;
use ChromeDevtoolsProtocol\Model\DOM\SetAttributeValueRequest;
use ChromeDevtoolsProtocol\Model\DOM\SetAttributesAsTextRequest;
use ChromeDevtoolsProtocol\Model\DOM\SetChildNodesEvent;
use ChromeDevtoolsProtocol\Model\DOM\SetFileInputFilesRequest;
use ChromeDevtoolsProtocol\Model\DOM\SetInspectedNodeRequest;
use ChromeDevtoolsProtocol\Model\DOM\SetNodeNameRequest;
use ChromeDevtoolsProtocol\Model\DOM\SetNodeNameResponse;
use ChromeDevtoolsProtocol\Model\DOM\SetNodeStackTracesEnabledRequest;
use ChromeDevtoolsProtocol\Model\DOM\SetNodeValueRequest;
use ChromeDevtoolsProtocol\Model\DOM\SetOuterHTMLRequest;
use ChromeDevtoolsProtocol\Model\DOM\ShadowRootPoppedEvent;
use ChromeDevtoolsProtocol\Model\DOM\ShadowRootPushedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class DOMDomain implements DOMDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function collectClassNamesFromSubtree(
		ContextInterface $ctx,
		CollectClassNamesFromSubtreeRequest $request
	): CollectClassNamesFromSubtreeResponse {
		$response = $this->internalClient->executeCommand($ctx, 'DOM.collectClassNamesFromSubtree', $request);
		return CollectClassNamesFromSubtreeResponse::fromJson($response);
	}


	public function copyTo(ContextInterface $ctx, CopyToRequest $request): CopyToResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOM.copyTo', $request);
		return CopyToResponse::fromJson($response);
	}


	public function describeNode(ContextInterface $ctx, DescribeNodeRequest $request): DescribeNodeResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOM.describeNode', $request);
		return DescribeNodeResponse::fromJson($response);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'DOM.disable', $request);
	}


	public function discardSearchResults(ContextInterface $ctx, DiscardSearchResultsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOM.discardSearchResults', $request);
	}


	public function enable(ContextInterface $ctx, EnableRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOM.enable', $request);
	}


	public function focus(ContextInterface $ctx, FocusRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOM.focus', $request);
	}


	public function getAttributes(ContextInterface $ctx, GetAttributesRequest $request): GetAttributesResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOM.getAttributes', $request);
		return GetAttributesResponse::fromJson($response);
	}


	public function getBoxModel(ContextInterface $ctx, GetBoxModelRequest $request): GetBoxModelResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOM.getBoxModel', $request);
		return GetBoxModelResponse::fromJson($response);
	}


	public function getContainerForNode(
		ContextInterface $ctx,
		GetContainerForNodeRequest $request
	): GetContainerForNodeResponse {
		$response = $this->internalClient->executeCommand($ctx, 'DOM.getContainerForNode', $request);
		return GetContainerForNodeResponse::fromJson($response);
	}


	public function getContentQuads(ContextInterface $ctx, GetContentQuadsRequest $request): GetContentQuadsResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOM.getContentQuads', $request);
		return GetContentQuadsResponse::fromJson($response);
	}


	public function getDocument(ContextInterface $ctx, GetDocumentRequest $request): GetDocumentResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOM.getDocument', $request);
		return GetDocumentResponse::fromJson($response);
	}


	public function getFileInfo(ContextInterface $ctx, GetFileInfoRequest $request): GetFileInfoResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOM.getFileInfo', $request);
		return GetFileInfoResponse::fromJson($response);
	}


	public function getFlattenedDocument(
		ContextInterface $ctx,
		GetFlattenedDocumentRequest $request
	): GetFlattenedDocumentResponse {
		$response = $this->internalClient->executeCommand($ctx, 'DOM.getFlattenedDocument', $request);
		return GetFlattenedDocumentResponse::fromJson($response);
	}


	public function getFrameOwner(ContextInterface $ctx, GetFrameOwnerRequest $request): GetFrameOwnerResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOM.getFrameOwner', $request);
		return GetFrameOwnerResponse::fromJson($response);
	}


	public function getNodeForLocation(
		ContextInterface $ctx,
		GetNodeForLocationRequest $request
	): GetNodeForLocationResponse {
		$response = $this->internalClient->executeCommand($ctx, 'DOM.getNodeForLocation', $request);
		return GetNodeForLocationResponse::fromJson($response);
	}


	public function getNodesForSubtreeByStyle(
		ContextInterface $ctx,
		GetNodesForSubtreeByStyleRequest $request
	): GetNodesForSubtreeByStyleResponse {
		$response = $this->internalClient->executeCommand($ctx, 'DOM.getNodesForSubtreeByStyle', $request);
		return GetNodesForSubtreeByStyleResponse::fromJson($response);
	}


	public function getNodeStackTraces(
		ContextInterface $ctx,
		GetNodeStackTracesRequest $request
	): GetNodeStackTracesResponse {
		$response = $this->internalClient->executeCommand($ctx, 'DOM.getNodeStackTraces', $request);
		return GetNodeStackTracesResponse::fromJson($response);
	}


	public function getOuterHTML(ContextInterface $ctx, GetOuterHTMLRequest $request): GetOuterHTMLResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOM.getOuterHTML', $request);
		return GetOuterHTMLResponse::fromJson($response);
	}


	public function getQueryingDescendantsForContainer(
		ContextInterface $ctx,
		GetQueryingDescendantsForContainerRequest $request
	): GetQueryingDescendantsForContainerResponse {
		$response = $this->internalClient->executeCommand($ctx, 'DOM.getQueryingDescendantsForContainer', $request);
		return GetQueryingDescendantsForContainerResponse::fromJson($response);
	}


	public function getRelayoutBoundary(
		ContextInterface $ctx,
		GetRelayoutBoundaryRequest $request
	): GetRelayoutBoundaryResponse {
		$response = $this->internalClient->executeCommand($ctx, 'DOM.getRelayoutBoundary', $request);
		return GetRelayoutBoundaryResponse::fromJson($response);
	}


	public function getSearchResults(ContextInterface $ctx, GetSearchResultsRequest $request): GetSearchResultsResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOM.getSearchResults', $request);
		return GetSearchResultsResponse::fromJson($response);
	}


	public function hideHighlight(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'DOM.hideHighlight', $request);
	}


	public function highlightNode(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'DOM.highlightNode', $request);
	}


	public function highlightRect(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'DOM.highlightRect', $request);
	}


	public function markUndoableState(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'DOM.markUndoableState', $request);
	}


	public function moveTo(ContextInterface $ctx, MoveToRequest $request): MoveToResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOM.moveTo', $request);
		return MoveToResponse::fromJson($response);
	}


	public function performSearch(ContextInterface $ctx, PerformSearchRequest $request): PerformSearchResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOM.performSearch', $request);
		return PerformSearchResponse::fromJson($response);
	}


	public function pushNodeByPathToFrontend(
		ContextInterface $ctx,
		PushNodeByPathToFrontendRequest $request
	): PushNodeByPathToFrontendResponse {
		$response = $this->internalClient->executeCommand($ctx, 'DOM.pushNodeByPathToFrontend', $request);
		return PushNodeByPathToFrontendResponse::fromJson($response);
	}


	public function pushNodesByBackendIdsToFrontend(
		ContextInterface $ctx,
		PushNodesByBackendIdsToFrontendRequest $request
	): PushNodesByBackendIdsToFrontendResponse {
		$response = $this->internalClient->executeCommand($ctx, 'DOM.pushNodesByBackendIdsToFrontend', $request);
		return PushNodesByBackendIdsToFrontendResponse::fromJson($response);
	}


	public function querySelector(ContextInterface $ctx, QuerySelectorRequest $request): QuerySelectorResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOM.querySelector', $request);
		return QuerySelectorResponse::fromJson($response);
	}


	public function querySelectorAll(ContextInterface $ctx, QuerySelectorAllRequest $request): QuerySelectorAllResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOM.querySelectorAll', $request);
		return QuerySelectorAllResponse::fromJson($response);
	}


	public function redo(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'DOM.redo', $request);
	}


	public function removeAttribute(ContextInterface $ctx, RemoveAttributeRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOM.removeAttribute', $request);
	}


	public function removeNode(ContextInterface $ctx, RemoveNodeRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOM.removeNode', $request);
	}


	public function requestChildNodes(ContextInterface $ctx, RequestChildNodesRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOM.requestChildNodes', $request);
	}


	public function requestNode(ContextInterface $ctx, RequestNodeRequest $request): RequestNodeResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOM.requestNode', $request);
		return RequestNodeResponse::fromJson($response);
	}


	public function resolveNode(ContextInterface $ctx, ResolveNodeRequest $request): ResolveNodeResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOM.resolveNode', $request);
		return ResolveNodeResponse::fromJson($response);
	}


	public function scrollIntoViewIfNeeded(ContextInterface $ctx, ScrollIntoViewIfNeededRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOM.scrollIntoViewIfNeeded', $request);
	}


	public function setAttributesAsText(ContextInterface $ctx, SetAttributesAsTextRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOM.setAttributesAsText', $request);
	}


	public function setAttributeValue(ContextInterface $ctx, SetAttributeValueRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOM.setAttributeValue', $request);
	}


	public function setFileInputFiles(ContextInterface $ctx, SetFileInputFilesRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOM.setFileInputFiles', $request);
	}


	public function setInspectedNode(ContextInterface $ctx, SetInspectedNodeRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOM.setInspectedNode', $request);
	}


	public function setNodeName(ContextInterface $ctx, SetNodeNameRequest $request): SetNodeNameResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOM.setNodeName', $request);
		return SetNodeNameResponse::fromJson($response);
	}


	public function setNodeStackTracesEnabled(ContextInterface $ctx, SetNodeStackTracesEnabledRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOM.setNodeStackTracesEnabled', $request);
	}


	public function setNodeValue(ContextInterface $ctx, SetNodeValueRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOM.setNodeValue', $request);
	}


	public function setOuterHTML(ContextInterface $ctx, SetOuterHTMLRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOM.setOuterHTML', $request);
	}


	public function undo(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'DOM.undo', $request);
	}


	public function addAttributeModifiedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOM.attributeModified', function ($event) use ($listener) {
			return $listener(AttributeModifiedEvent::fromJson($event));
		});
	}


	public function awaitAttributeModified(ContextInterface $ctx): AttributeModifiedEvent
	{
		return AttributeModifiedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOM.attributeModified'));
	}


	public function addAttributeRemovedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOM.attributeRemoved', function ($event) use ($listener) {
			return $listener(AttributeRemovedEvent::fromJson($event));
		});
	}


	public function awaitAttributeRemoved(ContextInterface $ctx): AttributeRemovedEvent
	{
		return AttributeRemovedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOM.attributeRemoved'));
	}


	public function addCharacterDataModifiedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOM.characterDataModified', function ($event) use ($listener) {
			return $listener(CharacterDataModifiedEvent::fromJson($event));
		});
	}


	public function awaitCharacterDataModified(ContextInterface $ctx): CharacterDataModifiedEvent
	{
		return CharacterDataModifiedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOM.characterDataModified'));
	}


	public function addChildNodeCountUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOM.childNodeCountUpdated', function ($event) use ($listener) {
			return $listener(ChildNodeCountUpdatedEvent::fromJson($event));
		});
	}


	public function awaitChildNodeCountUpdated(ContextInterface $ctx): ChildNodeCountUpdatedEvent
	{
		return ChildNodeCountUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOM.childNodeCountUpdated'));
	}


	public function addChildNodeInsertedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOM.childNodeInserted', function ($event) use ($listener) {
			return $listener(ChildNodeInsertedEvent::fromJson($event));
		});
	}


	public function awaitChildNodeInserted(ContextInterface $ctx): ChildNodeInsertedEvent
	{
		return ChildNodeInsertedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOM.childNodeInserted'));
	}


	public function addChildNodeRemovedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOM.childNodeRemoved', function ($event) use ($listener) {
			return $listener(ChildNodeRemovedEvent::fromJson($event));
		});
	}


	public function awaitChildNodeRemoved(ContextInterface $ctx): ChildNodeRemovedEvent
	{
		return ChildNodeRemovedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOM.childNodeRemoved'));
	}


	public function addDistributedNodesUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOM.distributedNodesUpdated', function ($event) use ($listener) {
			return $listener(DistributedNodesUpdatedEvent::fromJson($event));
		});
	}


	public function awaitDistributedNodesUpdated(ContextInterface $ctx): DistributedNodesUpdatedEvent
	{
		return DistributedNodesUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOM.distributedNodesUpdated'));
	}


	public function addDocumentUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOM.documentUpdated', function ($event) use ($listener) {
			return $listener(DocumentUpdatedEvent::fromJson($event));
		});
	}


	public function awaitDocumentUpdated(ContextInterface $ctx): DocumentUpdatedEvent
	{
		return DocumentUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOM.documentUpdated'));
	}


	public function addInlineStyleInvalidatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOM.inlineStyleInvalidated', function ($event) use ($listener) {
			return $listener(InlineStyleInvalidatedEvent::fromJson($event));
		});
	}


	public function awaitInlineStyleInvalidated(ContextInterface $ctx): InlineStyleInvalidatedEvent
	{
		return InlineStyleInvalidatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOM.inlineStyleInvalidated'));
	}


	public function addPseudoElementAddedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOM.pseudoElementAdded', function ($event) use ($listener) {
			return $listener(PseudoElementAddedEvent::fromJson($event));
		});
	}


	public function awaitPseudoElementAdded(ContextInterface $ctx): PseudoElementAddedEvent
	{
		return PseudoElementAddedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOM.pseudoElementAdded'));
	}


	public function addPseudoElementRemovedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOM.pseudoElementRemoved', function ($event) use ($listener) {
			return $listener(PseudoElementRemovedEvent::fromJson($event));
		});
	}


	public function awaitPseudoElementRemoved(ContextInterface $ctx): PseudoElementRemovedEvent
	{
		return PseudoElementRemovedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOM.pseudoElementRemoved'));
	}


	public function addSetChildNodesListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOM.setChildNodes', function ($event) use ($listener) {
			return $listener(SetChildNodesEvent::fromJson($event));
		});
	}


	public function awaitSetChildNodes(ContextInterface $ctx): SetChildNodesEvent
	{
		return SetChildNodesEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOM.setChildNodes'));
	}


	public function addShadowRootPoppedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOM.shadowRootPopped', function ($event) use ($listener) {
			return $listener(ShadowRootPoppedEvent::fromJson($event));
		});
	}


	public function awaitShadowRootPopped(ContextInterface $ctx): ShadowRootPoppedEvent
	{
		return ShadowRootPoppedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOM.shadowRootPopped'));
	}


	public function addShadowRootPushedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOM.shadowRootPushed', function ($event) use ($listener) {
			return $listener(ShadowRootPushedEvent::fromJson($event));
		});
	}


	public function awaitShadowRootPushed(ContextInterface $ctx): ShadowRootPushedEvent
	{
		return ShadowRootPushedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOM.shadowRootPushed'));
	}
}
