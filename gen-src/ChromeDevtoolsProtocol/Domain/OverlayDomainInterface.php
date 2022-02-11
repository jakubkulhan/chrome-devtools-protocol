<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Overlay\GetGridHighlightObjectsForTestRequest;
use ChromeDevtoolsProtocol\Model\Overlay\GetGridHighlightObjectsForTestResponse;
use ChromeDevtoolsProtocol\Model\Overlay\GetHighlightObjectForTestRequest;
use ChromeDevtoolsProtocol\Model\Overlay\GetHighlightObjectForTestResponse;
use ChromeDevtoolsProtocol\Model\Overlay\GetSourceOrderHighlightObjectForTestRequest;
use ChromeDevtoolsProtocol\Model\Overlay\GetSourceOrderHighlightObjectForTestResponse;
use ChromeDevtoolsProtocol\Model\Overlay\HighlightFrameRequest;
use ChromeDevtoolsProtocol\Model\Overlay\HighlightNodeRequest;
use ChromeDevtoolsProtocol\Model\Overlay\HighlightQuadRequest;
use ChromeDevtoolsProtocol\Model\Overlay\HighlightRectRequest;
use ChromeDevtoolsProtocol\Model\Overlay\HighlightSourceOrderRequest;
use ChromeDevtoolsProtocol\Model\Overlay\InspectModeCanceledEvent;
use ChromeDevtoolsProtocol\Model\Overlay\InspectNodeRequestedEvent;
use ChromeDevtoolsProtocol\Model\Overlay\NodeHighlightRequestedEvent;
use ChromeDevtoolsProtocol\Model\Overlay\ScreenshotRequestedEvent;
use ChromeDevtoolsProtocol\Model\Overlay\SetInspectModeRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetPausedInDebuggerMessageRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowAdHighlightsRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowContainerQueryOverlaysRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowDebugBordersRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowFPSCounterRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowFlexOverlaysRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowGridOverlaysRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowHingeRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowHitTestBordersRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowIsolatedElementsRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowLayoutShiftRegionsRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowPaintRectsRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowScrollBottleneckRectsRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowScrollSnapOverlaysRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowViewportSizeOnResizeRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowWebVitalsRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * This domain provides various functionality related to drawing atop the inspected page.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface OverlayDomainInterface
{
	/**
	 * Disables domain notifications.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables domain notifications.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * For Persistent Grid testing.
	 *
	 * @param ContextInterface $ctx
	 * @param GetGridHighlightObjectsForTestRequest $request
	 *
	 * @return GetGridHighlightObjectsForTestResponse
	 */
	public function getGridHighlightObjectsForTest(
		ContextInterface $ctx,
		GetGridHighlightObjectsForTestRequest $request
	): GetGridHighlightObjectsForTestResponse;


	/**
	 * For testing.
	 *
	 * @param ContextInterface $ctx
	 * @param GetHighlightObjectForTestRequest $request
	 *
	 * @return GetHighlightObjectForTestResponse
	 */
	public function getHighlightObjectForTest(
		ContextInterface $ctx,
		GetHighlightObjectForTestRequest $request
	): GetHighlightObjectForTestResponse;


	/**
	 * For Source Order Viewer testing.
	 *
	 * @param ContextInterface $ctx
	 * @param GetSourceOrderHighlightObjectForTestRequest $request
	 *
	 * @return GetSourceOrderHighlightObjectForTestResponse
	 */
	public function getSourceOrderHighlightObjectForTest(
		ContextInterface $ctx,
		GetSourceOrderHighlightObjectForTestRequest $request
	): GetSourceOrderHighlightObjectForTestResponse;


	/**
	 * Hides any highlight.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function hideHighlight(ContextInterface $ctx): void;


	/**
	 * Highlights owner element of the frame with given id. Deprecated: Doesn't work reliablity and cannot be fixed due to process separatation (the owner node might be in a different process). Determine the owner node in the client and use highlightNode.
	 *
	 * @param ContextInterface $ctx
	 * @param HighlightFrameRequest $request
	 *
	 * @return void
	 */
	public function highlightFrame(ContextInterface $ctx, HighlightFrameRequest $request): void;


	/**
	 * Highlights DOM node with given id or with the given JavaScript object wrapper. Either nodeId or objectId must be specified.
	 *
	 * @param ContextInterface $ctx
	 * @param HighlightNodeRequest $request
	 *
	 * @return void
	 */
	public function highlightNode(ContextInterface $ctx, HighlightNodeRequest $request): void;


	/**
	 * Highlights given quad. Coordinates are absolute with respect to the main frame viewport.
	 *
	 * @param ContextInterface $ctx
	 * @param HighlightQuadRequest $request
	 *
	 * @return void
	 */
	public function highlightQuad(ContextInterface $ctx, HighlightQuadRequest $request): void;


	/**
	 * Highlights given rectangle. Coordinates are absolute with respect to the main frame viewport.
	 *
	 * @param ContextInterface $ctx
	 * @param HighlightRectRequest $request
	 *
	 * @return void
	 */
	public function highlightRect(ContextInterface $ctx, HighlightRectRequest $request): void;


	/**
	 * Highlights the source order of the children of the DOM node with given id or with the given JavaScript object wrapper. Either nodeId or objectId must be specified.
	 *
	 * @param ContextInterface $ctx
	 * @param HighlightSourceOrderRequest $request
	 *
	 * @return void
	 */
	public function highlightSourceOrder(ContextInterface $ctx, HighlightSourceOrderRequest $request): void;


	/**
	 * Enters the 'inspect' mode. In this mode, elements that user is hovering over are highlighted. Backend then generates 'inspectNodeRequested' event upon element selection.
	 *
	 * @param ContextInterface $ctx
	 * @param SetInspectModeRequest $request
	 *
	 * @return void
	 */
	public function setInspectMode(ContextInterface $ctx, SetInspectModeRequest $request): void;


	/**
	 * Call Overlay.setPausedInDebuggerMessage command.
	 *
	 * @param ContextInterface $ctx
	 * @param SetPausedInDebuggerMessageRequest $request
	 *
	 * @return void
	 */
	public function setPausedInDebuggerMessage(ContextInterface $ctx, SetPausedInDebuggerMessageRequest $request): void;


	/**
	 * Highlights owner element of all frames detected to be ads.
	 *
	 * @param ContextInterface $ctx
	 * @param SetShowAdHighlightsRequest $request
	 *
	 * @return void
	 */
	public function setShowAdHighlights(ContextInterface $ctx, SetShowAdHighlightsRequest $request): void;


	/**
	 * Call Overlay.setShowContainerQueryOverlays command.
	 *
	 * @param ContextInterface $ctx
	 * @param SetShowContainerQueryOverlaysRequest $request
	 *
	 * @return void
	 */
	public function setShowContainerQueryOverlays(
		ContextInterface $ctx,
		SetShowContainerQueryOverlaysRequest $request
	): void;


	/**
	 * Requests that backend shows debug borders on layers
	 *
	 * @param ContextInterface $ctx
	 * @param SetShowDebugBordersRequest $request
	 *
	 * @return void
	 */
	public function setShowDebugBorders(ContextInterface $ctx, SetShowDebugBordersRequest $request): void;


	/**
	 * Call Overlay.setShowFlexOverlays command.
	 *
	 * @param ContextInterface $ctx
	 * @param SetShowFlexOverlaysRequest $request
	 *
	 * @return void
	 */
	public function setShowFlexOverlays(ContextInterface $ctx, SetShowFlexOverlaysRequest $request): void;


	/**
	 * Requests that backend shows the FPS counter
	 *
	 * @param ContextInterface $ctx
	 * @param SetShowFPSCounterRequest $request
	 *
	 * @return void
	 */
	public function setShowFPSCounter(ContextInterface $ctx, SetShowFPSCounterRequest $request): void;


	/**
	 * Highlight multiple elements with the CSS Grid overlay.
	 *
	 * @param ContextInterface $ctx
	 * @param SetShowGridOverlaysRequest $request
	 *
	 * @return void
	 */
	public function setShowGridOverlays(ContextInterface $ctx, SetShowGridOverlaysRequest $request): void;


	/**
	 * Add a dual screen device hinge
	 *
	 * @param ContextInterface $ctx
	 * @param SetShowHingeRequest $request
	 *
	 * @return void
	 */
	public function setShowHinge(ContextInterface $ctx, SetShowHingeRequest $request): void;


	/**
	 * Deprecated, no longer has any effect.
	 *
	 * @param ContextInterface $ctx
	 * @param SetShowHitTestBordersRequest $request
	 *
	 * @return void
	 */
	public function setShowHitTestBorders(ContextInterface $ctx, SetShowHitTestBordersRequest $request): void;


	/**
	 * Show elements in isolation mode with overlays.
	 *
	 * @param ContextInterface $ctx
	 * @param SetShowIsolatedElementsRequest $request
	 *
	 * @return void
	 */
	public function setShowIsolatedElements(ContextInterface $ctx, SetShowIsolatedElementsRequest $request): void;


	/**
	 * Requests that backend shows layout shift regions
	 *
	 * @param ContextInterface $ctx
	 * @param SetShowLayoutShiftRegionsRequest $request
	 *
	 * @return void
	 */
	public function setShowLayoutShiftRegions(ContextInterface $ctx, SetShowLayoutShiftRegionsRequest $request): void;


	/**
	 * Requests that backend shows paint rectangles
	 *
	 * @param ContextInterface $ctx
	 * @param SetShowPaintRectsRequest $request
	 *
	 * @return void
	 */
	public function setShowPaintRects(ContextInterface $ctx, SetShowPaintRectsRequest $request): void;


	/**
	 * Requests that backend shows scroll bottleneck rects
	 *
	 * @param ContextInterface $ctx
	 * @param SetShowScrollBottleneckRectsRequest $request
	 *
	 * @return void
	 */
	public function setShowScrollBottleneckRects(ContextInterface $ctx, SetShowScrollBottleneckRectsRequest $request): void;


	/**
	 * Call Overlay.setShowScrollSnapOverlays command.
	 *
	 * @param ContextInterface $ctx
	 * @param SetShowScrollSnapOverlaysRequest $request
	 *
	 * @return void
	 */
	public function setShowScrollSnapOverlays(ContextInterface $ctx, SetShowScrollSnapOverlaysRequest $request): void;


	/**
	 * Paints viewport size upon main frame resize.
	 *
	 * @param ContextInterface $ctx
	 * @param SetShowViewportSizeOnResizeRequest $request
	 *
	 * @return void
	 */
	public function setShowViewportSizeOnResize(ContextInterface $ctx, SetShowViewportSizeOnResizeRequest $request): void;


	/**
	 * Request that backend shows an overlay with web vital metrics.
	 *
	 * @param ContextInterface $ctx
	 * @param SetShowWebVitalsRequest $request
	 *
	 * @return void
	 */
	public function setShowWebVitals(ContextInterface $ctx, SetShowWebVitalsRequest $request): void;


	/**
	 * Fired when user cancels the inspect mode.
	 *
	 * Listener will be called whenever event Overlay.inspectModeCanceled is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addInspectModeCanceledListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when user cancels the inspect mode.
	 *
	 * Method will block until first Overlay.inspectModeCanceled event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return InspectModeCanceledEvent
	 */
	public function awaitInspectModeCanceled(ContextInterface $ctx): InspectModeCanceledEvent;


	/**
	 * Fired when the node should be inspected. This happens after call to `setInspectMode` or when user manually inspects an element.
	 *
	 * Listener will be called whenever event Overlay.inspectNodeRequested is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addInspectNodeRequestedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when the node should be inspected. This happens after call to `setInspectMode` or when user manually inspects an element.
	 *
	 * Method will block until first Overlay.inspectNodeRequested event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return InspectNodeRequestedEvent
	 */
	public function awaitInspectNodeRequested(ContextInterface $ctx): InspectNodeRequestedEvent;


	/**
	 * Fired when the node should be highlighted. This happens after call to `setInspectMode`.
	 *
	 * Listener will be called whenever event Overlay.nodeHighlightRequested is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addNodeHighlightRequestedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when the node should be highlighted. This happens after call to `setInspectMode`.
	 *
	 * Method will block until first Overlay.nodeHighlightRequested event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return NodeHighlightRequestedEvent
	 */
	public function awaitNodeHighlightRequested(ContextInterface $ctx): NodeHighlightRequestedEvent;


	/**
	 * Fired when user asks to capture screenshot of some area on the page.
	 *
	 * Listener will be called whenever event Overlay.screenshotRequested is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addScreenshotRequestedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when user asks to capture screenshot of some area on the page.
	 *
	 * Method will block until first Overlay.screenshotRequested event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ScreenshotRequestedEvent
	 */
	public function awaitScreenshotRequested(ContextInterface $ctx): ScreenshotRequestedEvent;
}
