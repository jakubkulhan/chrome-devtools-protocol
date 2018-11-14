<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Overlay\GetHighlightObjectForTestRequest;
use ChromeDevtoolsProtocol\Model\Overlay\GetHighlightObjectForTestResponse;
use ChromeDevtoolsProtocol\Model\Overlay\HighlightFrameRequest;
use ChromeDevtoolsProtocol\Model\Overlay\HighlightNodeRequest;
use ChromeDevtoolsProtocol\Model\Overlay\HighlightQuadRequest;
use ChromeDevtoolsProtocol\Model\Overlay\HighlightRectRequest;
use ChromeDevtoolsProtocol\Model\Overlay\InspectNodeRequestedEvent;
use ChromeDevtoolsProtocol\Model\Overlay\NodeHighlightRequestedEvent;
use ChromeDevtoolsProtocol\Model\Overlay\ScreenshotRequestedEvent;
use ChromeDevtoolsProtocol\Model\Overlay\SetInspectModeRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetPausedInDebuggerMessageRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowDebugBordersRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowFPSCounterRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowHitTestBordersRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowPaintRectsRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowScrollBottleneckRectsRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetShowViewportSizeOnResizeRequest;
use ChromeDevtoolsProtocol\Model\Overlay\SetSuspendedRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class OverlayDomain implements OverlayDomainInterface
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
		$this->internalClient->executeCommand($ctx, 'Overlay.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Overlay.enable', $request);
	}


	public function getHighlightObjectForTest(ContextInterface $ctx, GetHighlightObjectForTestRequest $request): GetHighlightObjectForTestResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Overlay.getHighlightObjectForTest', $request);
		return GetHighlightObjectForTestResponse::fromJson($response);
	}


	public function hideHighlight(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Overlay.hideHighlight', $request);
	}


	public function highlightFrame(ContextInterface $ctx, HighlightFrameRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Overlay.highlightFrame', $request);
	}


	public function highlightNode(ContextInterface $ctx, HighlightNodeRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Overlay.highlightNode', $request);
	}


	public function highlightQuad(ContextInterface $ctx, HighlightQuadRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Overlay.highlightQuad', $request);
	}


	public function highlightRect(ContextInterface $ctx, HighlightRectRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Overlay.highlightRect', $request);
	}


	public function setInspectMode(ContextInterface $ctx, SetInspectModeRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Overlay.setInspectMode', $request);
	}


	public function setPausedInDebuggerMessage(ContextInterface $ctx, SetPausedInDebuggerMessageRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Overlay.setPausedInDebuggerMessage', $request);
	}


	public function setShowDebugBorders(ContextInterface $ctx, SetShowDebugBordersRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Overlay.setShowDebugBorders', $request);
	}


	public function setShowFPSCounter(ContextInterface $ctx, SetShowFPSCounterRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Overlay.setShowFPSCounter', $request);
	}


	public function setShowHitTestBorders(ContextInterface $ctx, SetShowHitTestBordersRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Overlay.setShowHitTestBorders', $request);
	}


	public function setShowPaintRects(ContextInterface $ctx, SetShowPaintRectsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Overlay.setShowPaintRects', $request);
	}


	public function setShowScrollBottleneckRects(ContextInterface $ctx, SetShowScrollBottleneckRectsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Overlay.setShowScrollBottleneckRects', $request);
	}


	public function setShowViewportSizeOnResize(ContextInterface $ctx, SetShowViewportSizeOnResizeRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Overlay.setShowViewportSizeOnResize', $request);
	}


	public function setSuspended(ContextInterface $ctx, SetSuspendedRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Overlay.setSuspended', $request);
	}


	public function addInspectNodeRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Overlay.inspectNodeRequested', function ($event) use ($listener) {
			return $listener(InspectNodeRequestedEvent::fromJson($event));
		});
	}


	public function awaitInspectNodeRequested(ContextInterface $ctx): InspectNodeRequestedEvent
	{
		return InspectNodeRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Overlay.inspectNodeRequested'));
	}


	public function addNodeHighlightRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Overlay.nodeHighlightRequested', function ($event) use ($listener) {
			return $listener(NodeHighlightRequestedEvent::fromJson($event));
		});
	}


	public function awaitNodeHighlightRequested(ContextInterface $ctx): NodeHighlightRequestedEvent
	{
		return NodeHighlightRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Overlay.nodeHighlightRequested'));
	}


	public function addScreenshotRequestedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Overlay.screenshotRequested', function ($event) use ($listener) {
			return $listener(ScreenshotRequestedEvent::fromJson($event));
		});
	}


	public function awaitScreenshotRequested(ContextInterface $ctx): ScreenshotRequestedEvent
	{
		return ScreenshotRequestedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Overlay.screenshotRequested'));
	}
}
