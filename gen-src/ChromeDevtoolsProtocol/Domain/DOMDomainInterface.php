<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
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
use ChromeDevtoolsProtocol\Model\DOM\GetTopLayerElementsResponse;
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
use ChromeDevtoolsProtocol\Model\DOM\TopLayerElementsUpdatedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * This domain exposes DOM read/write operations. Each DOM Node is represented with its mirror object that has an `id`. This `id` can be used to get additional information on the Node, resolve it into the JavaScript object wrapper, etc. It is important that client receives DOM events only for the nodes that are known to the client. Backend keeps track of the nodes that were sent to the client and never sends the same node twice. It is client's responsibility to collect information about the nodes that were sent to the client.<p>Note that `iframe` owner elements will return corresponding document elements as their child nodes.</p>
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface DOMDomainInterface
{
	/**
	 * Collects class names for the node with given id and all of it's child nodes.
	 *
	 * @param ContextInterface $ctx
	 * @param CollectClassNamesFromSubtreeRequest $request
	 *
	 * @return CollectClassNamesFromSubtreeResponse
	 */
	public function collectClassNamesFromSubtree(
		ContextInterface $ctx,
		CollectClassNamesFromSubtreeRequest $request
	): CollectClassNamesFromSubtreeResponse;


	/**
	 * Creates a deep copy of the specified node and places it into the target container before the given anchor.
	 *
	 * @param ContextInterface $ctx
	 * @param CopyToRequest $request
	 *
	 * @return CopyToResponse
	 */
	public function copyTo(ContextInterface $ctx, CopyToRequest $request): CopyToResponse;


	/**
	 * Describes node given its id, does not require domain to be enabled. Does not start tracking any objects, can be used for automation.
	 *
	 * @param ContextInterface $ctx
	 * @param DescribeNodeRequest $request
	 *
	 * @return DescribeNodeResponse
	 */
	public function describeNode(ContextInterface $ctx, DescribeNodeRequest $request): DescribeNodeResponse;


	/**
	 * Disables DOM agent for the given page.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Discards search results from the session with the given id. `getSearchResults` should no longer be called for that search.
	 *
	 * @param ContextInterface $ctx
	 * @param DiscardSearchResultsRequest $request
	 *
	 * @return void
	 */
	public function discardSearchResults(ContextInterface $ctx, DiscardSearchResultsRequest $request): void;


	/**
	 * Enables DOM agent for the given page.
	 *
	 * @param ContextInterface $ctx
	 * @param EnableRequest $request
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx, EnableRequest $request): void;


	/**
	 * Focuses the given element.
	 *
	 * @param ContextInterface $ctx
	 * @param FocusRequest $request
	 *
	 * @return void
	 */
	public function focus(ContextInterface $ctx, FocusRequest $request): void;


	/**
	 * Returns attributes for the specified node.
	 *
	 * @param ContextInterface $ctx
	 * @param GetAttributesRequest $request
	 *
	 * @return GetAttributesResponse
	 */
	public function getAttributes(ContextInterface $ctx, GetAttributesRequest $request): GetAttributesResponse;


	/**
	 * Returns boxes for the given node.
	 *
	 * @param ContextInterface $ctx
	 * @param GetBoxModelRequest $request
	 *
	 * @return GetBoxModelResponse
	 */
	public function getBoxModel(ContextInterface $ctx, GetBoxModelRequest $request): GetBoxModelResponse;


	/**
	 * Returns the query container of the given node based on container query conditions: containerName, physical, and logical axes. If no axes are provided, the style container is returned, which is the direct parent or the closest element with a matching container-name.
	 *
	 * @param ContextInterface $ctx
	 * @param GetContainerForNodeRequest $request
	 *
	 * @return GetContainerForNodeResponse
	 */
	public function getContainerForNode(
		ContextInterface $ctx,
		GetContainerForNodeRequest $request
	): GetContainerForNodeResponse;


	/**
	 * Returns quads that describe node position on the page. This method might return multiple quads for inline nodes.
	 *
	 * @param ContextInterface $ctx
	 * @param GetContentQuadsRequest $request
	 *
	 * @return GetContentQuadsResponse
	 */
	public function getContentQuads(ContextInterface $ctx, GetContentQuadsRequest $request): GetContentQuadsResponse;


	/**
	 * Returns the root DOM node (and optionally the subtree) to the caller. Implicitly enables the DOM domain events for the current target.
	 *
	 * @param ContextInterface $ctx
	 * @param GetDocumentRequest $request
	 *
	 * @return GetDocumentResponse
	 */
	public function getDocument(ContextInterface $ctx, GetDocumentRequest $request): GetDocumentResponse;


	/**
	 * Returns file information for the given File wrapper.
	 *
	 * @param ContextInterface $ctx
	 * @param GetFileInfoRequest $request
	 *
	 * @return GetFileInfoResponse
	 */
	public function getFileInfo(ContextInterface $ctx, GetFileInfoRequest $request): GetFileInfoResponse;


	/**
	 * Returns the root DOM node (and optionally the subtree) to the caller. Deprecated, as it is not designed to work well with the rest of the DOM agent. Use DOMSnapshot.captureSnapshot instead.
	 *
	 * @param ContextInterface $ctx
	 * @param GetFlattenedDocumentRequest $request
	 *
	 * @return GetFlattenedDocumentResponse
	 */
	public function getFlattenedDocument(
		ContextInterface $ctx,
		GetFlattenedDocumentRequest $request
	): GetFlattenedDocumentResponse;


	/**
	 * Returns iframe node that owns iframe with the given domain.
	 *
	 * @param ContextInterface $ctx
	 * @param GetFrameOwnerRequest $request
	 *
	 * @return GetFrameOwnerResponse
	 */
	public function getFrameOwner(ContextInterface $ctx, GetFrameOwnerRequest $request): GetFrameOwnerResponse;


	/**
	 * Returns node id at given location. Depending on whether DOM domain is enabled, nodeId is either returned or not.
	 *
	 * @param ContextInterface $ctx
	 * @param GetNodeForLocationRequest $request
	 *
	 * @return GetNodeForLocationResponse
	 */
	public function getNodeForLocation(
		ContextInterface $ctx,
		GetNodeForLocationRequest $request
	): GetNodeForLocationResponse;


	/**
	 * Finds nodes with a given computed style in a subtree.
	 *
	 * @param ContextInterface $ctx
	 * @param GetNodesForSubtreeByStyleRequest $request
	 *
	 * @return GetNodesForSubtreeByStyleResponse
	 */
	public function getNodesForSubtreeByStyle(
		ContextInterface $ctx,
		GetNodesForSubtreeByStyleRequest $request
	): GetNodesForSubtreeByStyleResponse;


	/**
	 * Gets stack traces associated with a Node. As of now, only provides stack trace for Node creation.
	 *
	 * @param ContextInterface $ctx
	 * @param GetNodeStackTracesRequest $request
	 *
	 * @return GetNodeStackTracesResponse
	 */
	public function getNodeStackTraces(
		ContextInterface $ctx,
		GetNodeStackTracesRequest $request
	): GetNodeStackTracesResponse;


	/**
	 * Returns node's HTML markup.
	 *
	 * @param ContextInterface $ctx
	 * @param GetOuterHTMLRequest $request
	 *
	 * @return GetOuterHTMLResponse
	 */
	public function getOuterHTML(ContextInterface $ctx, GetOuterHTMLRequest $request): GetOuterHTMLResponse;


	/**
	 * Returns the descendants of a container query container that have container queries against this container.
	 *
	 * @param ContextInterface $ctx
	 * @param GetQueryingDescendantsForContainerRequest $request
	 *
	 * @return GetQueryingDescendantsForContainerResponse
	 */
	public function getQueryingDescendantsForContainer(
		ContextInterface $ctx,
		GetQueryingDescendantsForContainerRequest $request
	): GetQueryingDescendantsForContainerResponse;


	/**
	 * Returns the id of the nearest ancestor that is a relayout boundary.
	 *
	 * @param ContextInterface $ctx
	 * @param GetRelayoutBoundaryRequest $request
	 *
	 * @return GetRelayoutBoundaryResponse
	 */
	public function getRelayoutBoundary(
		ContextInterface $ctx,
		GetRelayoutBoundaryRequest $request
	): GetRelayoutBoundaryResponse;


	/**
	 * Returns search results from given `fromIndex` to given `toIndex` from the search with the given identifier.
	 *
	 * @param ContextInterface $ctx
	 * @param GetSearchResultsRequest $request
	 *
	 * @return GetSearchResultsResponse
	 */
	public function getSearchResults(ContextInterface $ctx, GetSearchResultsRequest $request): GetSearchResultsResponse;


	/**
	 * Returns NodeIds of current top layer elements. Top layer is rendered closest to the user within a viewport, therefore its elements always appear on top of all other content.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetTopLayerElementsResponse
	 */
	public function getTopLayerElements(ContextInterface $ctx): GetTopLayerElementsResponse;


	/**
	 * Hides any highlight.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function hideHighlight(ContextInterface $ctx): void;


	/**
	 * Highlights DOM node.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function highlightNode(ContextInterface $ctx): void;


	/**
	 * Highlights given rectangle.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function highlightRect(ContextInterface $ctx): void;


	/**
	 * Marks last undoable state.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function markUndoableState(ContextInterface $ctx): void;


	/**
	 * Moves node into the new container, places it before the given anchor.
	 *
	 * @param ContextInterface $ctx
	 * @param MoveToRequest $request
	 *
	 * @return MoveToResponse
	 */
	public function moveTo(ContextInterface $ctx, MoveToRequest $request): MoveToResponse;


	/**
	 * Searches for a given string in the DOM tree. Use `getSearchResults` to access search results or `cancelSearch` to end this search session.
	 *
	 * @param ContextInterface $ctx
	 * @param PerformSearchRequest $request
	 *
	 * @return PerformSearchResponse
	 */
	public function performSearch(ContextInterface $ctx, PerformSearchRequest $request): PerformSearchResponse;


	/**
	 * Requests that the node is sent to the caller given its path. // FIXME, use XPath
	 *
	 * @param ContextInterface $ctx
	 * @param PushNodeByPathToFrontendRequest $request
	 *
	 * @return PushNodeByPathToFrontendResponse
	 */
	public function pushNodeByPathToFrontend(
		ContextInterface $ctx,
		PushNodeByPathToFrontendRequest $request
	): PushNodeByPathToFrontendResponse;


	/**
	 * Requests that a batch of nodes is sent to the caller given their backend node ids.
	 *
	 * @param ContextInterface $ctx
	 * @param PushNodesByBackendIdsToFrontendRequest $request
	 *
	 * @return PushNodesByBackendIdsToFrontendResponse
	 */
	public function pushNodesByBackendIdsToFrontend(
		ContextInterface $ctx,
		PushNodesByBackendIdsToFrontendRequest $request
	): PushNodesByBackendIdsToFrontendResponse;


	/**
	 * Executes `querySelector` on a given node.
	 *
	 * @param ContextInterface $ctx
	 * @param QuerySelectorRequest $request
	 *
	 * @return QuerySelectorResponse
	 */
	public function querySelector(ContextInterface $ctx, QuerySelectorRequest $request): QuerySelectorResponse;


	/**
	 * Executes `querySelectorAll` on a given node.
	 *
	 * @param ContextInterface $ctx
	 * @param QuerySelectorAllRequest $request
	 *
	 * @return QuerySelectorAllResponse
	 */
	public function querySelectorAll(ContextInterface $ctx, QuerySelectorAllRequest $request): QuerySelectorAllResponse;


	/**
	 * Re-does the last undone action.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function redo(ContextInterface $ctx): void;


	/**
	 * Removes attribute with given name from an element with given id.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveAttributeRequest $request
	 *
	 * @return void
	 */
	public function removeAttribute(ContextInterface $ctx, RemoveAttributeRequest $request): void;


	/**
	 * Removes node with given id.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveNodeRequest $request
	 *
	 * @return void
	 */
	public function removeNode(ContextInterface $ctx, RemoveNodeRequest $request): void;


	/**
	 * Requests that children of the node with given id are returned to the caller in form of `setChildNodes` events where not only immediate children are retrieved, but all children down to the specified depth.
	 *
	 * @param ContextInterface $ctx
	 * @param RequestChildNodesRequest $request
	 *
	 * @return void
	 */
	public function requestChildNodes(ContextInterface $ctx, RequestChildNodesRequest $request): void;


	/**
	 * Requests that the node is sent to the caller given the JavaScript node object reference. All nodes that form the path from the node to the root are also sent to the client as a series of `setChildNodes` notifications.
	 *
	 * @param ContextInterface $ctx
	 * @param RequestNodeRequest $request
	 *
	 * @return RequestNodeResponse
	 */
	public function requestNode(ContextInterface $ctx, RequestNodeRequest $request): RequestNodeResponse;


	/**
	 * Resolves the JavaScript node object for a given NodeId or BackendNodeId.
	 *
	 * @param ContextInterface $ctx
	 * @param ResolveNodeRequest $request
	 *
	 * @return ResolveNodeResponse
	 */
	public function resolveNode(ContextInterface $ctx, ResolveNodeRequest $request): ResolveNodeResponse;


	/**
	 * Scrolls the specified rect of the given node into view if not already visible. Note: exactly one between nodeId, backendNodeId and objectId should be passed to identify the node.
	 *
	 * @param ContextInterface $ctx
	 * @param ScrollIntoViewIfNeededRequest $request
	 *
	 * @return void
	 */
	public function scrollIntoViewIfNeeded(ContextInterface $ctx, ScrollIntoViewIfNeededRequest $request): void;


	/**
	 * Sets attributes on element with given id. This method is useful when user edits some existing attribute value and types in several attribute name/value pairs.
	 *
	 * @param ContextInterface $ctx
	 * @param SetAttributesAsTextRequest $request
	 *
	 * @return void
	 */
	public function setAttributesAsText(ContextInterface $ctx, SetAttributesAsTextRequest $request): void;


	/**
	 * Sets attribute for an element with given id.
	 *
	 * @param ContextInterface $ctx
	 * @param SetAttributeValueRequest $request
	 *
	 * @return void
	 */
	public function setAttributeValue(ContextInterface $ctx, SetAttributeValueRequest $request): void;


	/**
	 * Sets files for the given file input element.
	 *
	 * @param ContextInterface $ctx
	 * @param SetFileInputFilesRequest $request
	 *
	 * @return void
	 */
	public function setFileInputFiles(ContextInterface $ctx, SetFileInputFilesRequest $request): void;


	/**
	 * Enables console to refer to the node with given id via $x (see Command Line API for more details $x functions).
	 *
	 * @param ContextInterface $ctx
	 * @param SetInspectedNodeRequest $request
	 *
	 * @return void
	 */
	public function setInspectedNode(ContextInterface $ctx, SetInspectedNodeRequest $request): void;


	/**
	 * Sets node name for a node with given id.
	 *
	 * @param ContextInterface $ctx
	 * @param SetNodeNameRequest $request
	 *
	 * @return SetNodeNameResponse
	 */
	public function setNodeName(ContextInterface $ctx, SetNodeNameRequest $request): SetNodeNameResponse;


	/**
	 * Sets if stack traces should be captured for Nodes. See `Node.getNodeStackTraces`. Default is disabled.
	 *
	 * @param ContextInterface $ctx
	 * @param SetNodeStackTracesEnabledRequest $request
	 *
	 * @return void
	 */
	public function setNodeStackTracesEnabled(ContextInterface $ctx, SetNodeStackTracesEnabledRequest $request): void;


	/**
	 * Sets node value for a node with given id.
	 *
	 * @param ContextInterface $ctx
	 * @param SetNodeValueRequest $request
	 *
	 * @return void
	 */
	public function setNodeValue(ContextInterface $ctx, SetNodeValueRequest $request): void;


	/**
	 * Sets node HTML markup, returns new node id.
	 *
	 * @param ContextInterface $ctx
	 * @param SetOuterHTMLRequest $request
	 *
	 * @return void
	 */
	public function setOuterHTML(ContextInterface $ctx, SetOuterHTMLRequest $request): void;


	/**
	 * Undoes the last performed action.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function undo(ContextInterface $ctx): void;


	/**
	 * Fired when `Element`'s attribute is modified.
	 *
	 * Listener will be called whenever event DOM.attributeModified is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addAttributeModifiedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when `Element`'s attribute is modified.
	 *
	 * Method will block until first DOM.attributeModified event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return AttributeModifiedEvent
	 */
	public function awaitAttributeModified(ContextInterface $ctx): AttributeModifiedEvent;


	/**
	 * Fired when `Element`'s attribute is removed.
	 *
	 * Listener will be called whenever event DOM.attributeRemoved is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addAttributeRemovedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when `Element`'s attribute is removed.
	 *
	 * Method will block until first DOM.attributeRemoved event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return AttributeRemovedEvent
	 */
	public function awaitAttributeRemoved(ContextInterface $ctx): AttributeRemovedEvent;


	/**
	 * Mirrors `DOMCharacterDataModified` event.
	 *
	 * Listener will be called whenever event DOM.characterDataModified is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addCharacterDataModifiedListener(callable $listener): SubscriptionInterface;


	/**
	 * Mirrors `DOMCharacterDataModified` event.
	 *
	 * Method will block until first DOM.characterDataModified event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return CharacterDataModifiedEvent
	 */
	public function awaitCharacterDataModified(ContextInterface $ctx): CharacterDataModifiedEvent;


	/**
	 * Fired when `Container`'s child node count has changed.
	 *
	 * Listener will be called whenever event DOM.childNodeCountUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addChildNodeCountUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when `Container`'s child node count has changed.
	 *
	 * Method will block until first DOM.childNodeCountUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ChildNodeCountUpdatedEvent
	 */
	public function awaitChildNodeCountUpdated(ContextInterface $ctx): ChildNodeCountUpdatedEvent;


	/**
	 * Mirrors `DOMNodeInserted` event.
	 *
	 * Listener will be called whenever event DOM.childNodeInserted is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addChildNodeInsertedListener(callable $listener): SubscriptionInterface;


	/**
	 * Mirrors `DOMNodeInserted` event.
	 *
	 * Method will block until first DOM.childNodeInserted event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ChildNodeInsertedEvent
	 */
	public function awaitChildNodeInserted(ContextInterface $ctx): ChildNodeInsertedEvent;


	/**
	 * Mirrors `DOMNodeRemoved` event.
	 *
	 * Listener will be called whenever event DOM.childNodeRemoved is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addChildNodeRemovedListener(callable $listener): SubscriptionInterface;


	/**
	 * Mirrors `DOMNodeRemoved` event.
	 *
	 * Method will block until first DOM.childNodeRemoved event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ChildNodeRemovedEvent
	 */
	public function awaitChildNodeRemoved(ContextInterface $ctx): ChildNodeRemovedEvent;


	/**
	 * Called when distribution is changed.
	 *
	 * Listener will be called whenever event DOM.distributedNodesUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDistributedNodesUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Called when distribution is changed.
	 *
	 * Method will block until first DOM.distributedNodesUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DistributedNodesUpdatedEvent
	 */
	public function awaitDistributedNodesUpdated(ContextInterface $ctx): DistributedNodesUpdatedEvent;


	/**
	 * Fired when `Document` has been totally updated. Node ids are no longer valid.
	 *
	 * Listener will be called whenever event DOM.documentUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDocumentUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when `Document` has been totally updated. Node ids are no longer valid.
	 *
	 * Method will block until first DOM.documentUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DocumentUpdatedEvent
	 */
	public function awaitDocumentUpdated(ContextInterface $ctx): DocumentUpdatedEvent;


	/**
	 * Fired when `Element`'s inline style is modified via a CSS property modification.
	 *
	 * Listener will be called whenever event DOM.inlineStyleInvalidated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addInlineStyleInvalidatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when `Element`'s inline style is modified via a CSS property modification.
	 *
	 * Method will block until first DOM.inlineStyleInvalidated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return InlineStyleInvalidatedEvent
	 */
	public function awaitInlineStyleInvalidated(ContextInterface $ctx): InlineStyleInvalidatedEvent;


	/**
	 * Called when a pseudo element is added to an element.
	 *
	 * Listener will be called whenever event DOM.pseudoElementAdded is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addPseudoElementAddedListener(callable $listener): SubscriptionInterface;


	/**
	 * Called when a pseudo element is added to an element.
	 *
	 * Method will block until first DOM.pseudoElementAdded event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return PseudoElementAddedEvent
	 */
	public function awaitPseudoElementAdded(ContextInterface $ctx): PseudoElementAddedEvent;


	/**
	 * Called when a pseudo element is removed from an element.
	 *
	 * Listener will be called whenever event DOM.pseudoElementRemoved is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addPseudoElementRemovedListener(callable $listener): SubscriptionInterface;


	/**
	 * Called when a pseudo element is removed from an element.
	 *
	 * Method will block until first DOM.pseudoElementRemoved event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return PseudoElementRemovedEvent
	 */
	public function awaitPseudoElementRemoved(ContextInterface $ctx): PseudoElementRemovedEvent;


	/**
	 * Fired when backend wants to provide client with the missing DOM structure. This happens upon most of the calls requesting node ids.
	 *
	 * Listener will be called whenever event DOM.setChildNodes is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addSetChildNodesListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when backend wants to provide client with the missing DOM structure. This happens upon most of the calls requesting node ids.
	 *
	 * Method will block until first DOM.setChildNodes event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return SetChildNodesEvent
	 */
	public function awaitSetChildNodes(ContextInterface $ctx): SetChildNodesEvent;


	/**
	 * Called when shadow root is popped from the element.
	 *
	 * Listener will be called whenever event DOM.shadowRootPopped is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addShadowRootPoppedListener(callable $listener): SubscriptionInterface;


	/**
	 * Called when shadow root is popped from the element.
	 *
	 * Method will block until first DOM.shadowRootPopped event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ShadowRootPoppedEvent
	 */
	public function awaitShadowRootPopped(ContextInterface $ctx): ShadowRootPoppedEvent;


	/**
	 * Called when shadow root is pushed into the element.
	 *
	 * Listener will be called whenever event DOM.shadowRootPushed is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addShadowRootPushedListener(callable $listener): SubscriptionInterface;


	/**
	 * Called when shadow root is pushed into the element.
	 *
	 * Method will block until first DOM.shadowRootPushed event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ShadowRootPushedEvent
	 */
	public function awaitShadowRootPushed(ContextInterface $ctx): ShadowRootPushedEvent;


	/**
	 * Called when top layer elements are changed.
	 *
	 * Listener will be called whenever event DOM.topLayerElementsUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addTopLayerElementsUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Called when top layer elements are changed.
	 *
	 * Method will block until first DOM.topLayerElementsUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return TopLayerElementsUpdatedEvent
	 */
	public function awaitTopLayerElementsUpdated(ContextInterface $ctx): TopLayerElementsUpdatedEvent;
}
