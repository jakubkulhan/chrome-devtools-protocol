<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
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

/**
 * Accessibility domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface AccessibilityDomainInterface
{
	/**
	 * Disables the accessibility domain.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables the accessibility domain which causes `AXNodeId`s to remain consistent between method calls. This turns on accessibility for the page, which can impact performance until accessibility is disabled.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Fetches a node and all ancestors up to and including the root. Requires `enable()` to have been called previously.
	 *
	 * @param ContextInterface $ctx
	 * @param GetAXNodeAndAncestorsRequest $request
	 *
	 * @return GetAXNodeAndAncestorsResponse
	 */
	public function getAXNodeAndAncestors(
		ContextInterface $ctx,
		GetAXNodeAndAncestorsRequest $request
	): GetAXNodeAndAncestorsResponse;


	/**
	 * Fetches a particular accessibility node by AXNodeId. Requires `enable()` to have been called previously.
	 *
	 * @param ContextInterface $ctx
	 * @param GetChildAXNodesRequest $request
	 *
	 * @return GetChildAXNodesResponse
	 */
	public function getChildAXNodes(ContextInterface $ctx, GetChildAXNodesRequest $request): GetChildAXNodesResponse;


	/**
	 * Fetches the entire accessibility tree for the root Document
	 *
	 * @param ContextInterface $ctx
	 * @param GetFullAXTreeRequest $request
	 *
	 * @return GetFullAXTreeResponse
	 */
	public function getFullAXTree(ContextInterface $ctx, GetFullAXTreeRequest $request): GetFullAXTreeResponse;


	/**
	 * Fetches the accessibility node and partial accessibility tree for this DOM node, if it exists.
	 *
	 * @param ContextInterface $ctx
	 * @param GetPartialAXTreeRequest $request
	 *
	 * @return GetPartialAXTreeResponse
	 */
	public function getPartialAXTree(ContextInterface $ctx, GetPartialAXTreeRequest $request): GetPartialAXTreeResponse;


	/**
	 * Fetches the root node. Requires `enable()` to have been called previously.
	 *
	 * @param ContextInterface $ctx
	 * @param GetRootAXNodeRequest $request
	 *
	 * @return GetRootAXNodeResponse
	 */
	public function getRootAXNode(ContextInterface $ctx, GetRootAXNodeRequest $request): GetRootAXNodeResponse;


	/**
	 * Query a DOM node's accessibility subtree for accessible name and role. This command computes the name and role for all nodes in the subtree, including those that are ignored for accessibility, and returns those that mactch the specified name and role. If no DOM node is specified, or the DOM node does not exist, the command returns an error. If neither `accessibleName` or `role` is specified, it returns all the accessibility nodes in the subtree.
	 *
	 * @param ContextInterface $ctx
	 * @param QueryAXTreeRequest $request
	 *
	 * @return QueryAXTreeResponse
	 */
	public function queryAXTree(ContextInterface $ctx, QueryAXTreeRequest $request): QueryAXTreeResponse;


	/**
	 * The loadComplete event mirrors the load complete event sent by the browser to assistive technology when the web page has finished loading.
	 *
	 * Listener will be called whenever event Accessibility.loadComplete is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addLoadCompleteListener(callable $listener): SubscriptionInterface;


	/**
	 * The loadComplete event mirrors the load complete event sent by the browser to assistive technology when the web page has finished loading.
	 *
	 * Method will block until first Accessibility.loadComplete event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return LoadCompleteEvent
	 */
	public function awaitLoadComplete(ContextInterface $ctx): LoadCompleteEvent;


	/**
	 * The nodesUpdated event is sent every time a previously requested node has changed the in tree.
	 *
	 * Listener will be called whenever event Accessibility.nodesUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addNodesUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * The nodesUpdated event is sent every time a previously requested node has changed the in tree.
	 *
	 * Method will block until first Accessibility.nodesUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return NodesUpdatedEvent
	 */
	public function awaitNodesUpdated(ContextInterface $ctx): NodesUpdatedEvent;
}
