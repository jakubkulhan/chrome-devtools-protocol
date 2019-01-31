<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\LayerTree\CompositingReasonsRequest;
use ChromeDevtoolsProtocol\Model\LayerTree\CompositingReasonsResponse;
use ChromeDevtoolsProtocol\Model\LayerTree\LayerPaintedEvent;
use ChromeDevtoolsProtocol\Model\LayerTree\LayerTreeDidChangeEvent;
use ChromeDevtoolsProtocol\Model\LayerTree\LoadSnapshotRequest;
use ChromeDevtoolsProtocol\Model\LayerTree\LoadSnapshotResponse;
use ChromeDevtoolsProtocol\Model\LayerTree\MakeSnapshotRequest;
use ChromeDevtoolsProtocol\Model\LayerTree\MakeSnapshotResponse;
use ChromeDevtoolsProtocol\Model\LayerTree\ProfileSnapshotRequest;
use ChromeDevtoolsProtocol\Model\LayerTree\ProfileSnapshotResponse;
use ChromeDevtoolsProtocol\Model\LayerTree\ReleaseSnapshotRequest;
use ChromeDevtoolsProtocol\Model\LayerTree\ReplaySnapshotRequest;
use ChromeDevtoolsProtocol\Model\LayerTree\ReplaySnapshotResponse;
use ChromeDevtoolsProtocol\Model\LayerTree\SnapshotCommandLogRequest;
use ChromeDevtoolsProtocol\Model\LayerTree\SnapshotCommandLogResponse;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class LayerTreeDomain implements LayerTreeDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function compositingReasons(ContextInterface $ctx, CompositingReasonsRequest $request): CompositingReasonsResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'LayerTree.compositingReasons', $request);
		return CompositingReasonsResponse::fromJson($response);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'LayerTree.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'LayerTree.enable', $request);
	}


	public function loadSnapshot(ContextInterface $ctx, LoadSnapshotRequest $request): LoadSnapshotResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'LayerTree.loadSnapshot', $request);
		return LoadSnapshotResponse::fromJson($response);
	}


	public function makeSnapshot(ContextInterface $ctx, MakeSnapshotRequest $request): MakeSnapshotResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'LayerTree.makeSnapshot', $request);
		return MakeSnapshotResponse::fromJson($response);
	}


	public function profileSnapshot(ContextInterface $ctx, ProfileSnapshotRequest $request): ProfileSnapshotResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'LayerTree.profileSnapshot', $request);
		return ProfileSnapshotResponse::fromJson($response);
	}


	public function releaseSnapshot(ContextInterface $ctx, ReleaseSnapshotRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'LayerTree.releaseSnapshot', $request);
	}


	public function replaySnapshot(ContextInterface $ctx, ReplaySnapshotRequest $request): ReplaySnapshotResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'LayerTree.replaySnapshot', $request);
		return ReplaySnapshotResponse::fromJson($response);
	}


	public function snapshotCommandLog(ContextInterface $ctx, SnapshotCommandLogRequest $request): SnapshotCommandLogResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'LayerTree.snapshotCommandLog', $request);
		return SnapshotCommandLogResponse::fromJson($response);
	}


	public function addLayerPaintedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('LayerTree.layerPainted', function ($event) use ($listener) {
			return $listener(LayerPaintedEvent::fromJson($event));
		});
	}


	public function awaitLayerPainted(ContextInterface $ctx): LayerPaintedEvent
	{
		return LayerPaintedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'LayerTree.layerPainted'));
	}


	public function addLayerTreeDidChangeListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('LayerTree.layerTreeDidChange', function ($event) use ($listener) {
			return $listener(LayerTreeDidChangeEvent::fromJson($event));
		});
	}


	public function awaitLayerTreeDidChange(ContextInterface $ctx): LayerTreeDidChangeEvent
	{
		return LayerTreeDidChangeEvent::fromJson($this->internalClient->awaitEvent($ctx, 'LayerTree.layerTreeDidChange'));
	}
}
