<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
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

/**
 * LayerTree domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface LayerTreeDomainInterface
{
	/**
	 * Provides the reasons why the given layer was composited.
	 *
	 * @param ContextInterface $ctx
	 * @param CompositingReasonsRequest $request
	 *
	 * @return CompositingReasonsResponse
	 */
	public function compositingReasons(
		ContextInterface $ctx,
		CompositingReasonsRequest $request
	): CompositingReasonsResponse;


	/**
	 * Disables compositing tree inspection.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables compositing tree inspection.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Returns the snapshot identifier.
	 *
	 * @param ContextInterface $ctx
	 * @param LoadSnapshotRequest $request
	 *
	 * @return LoadSnapshotResponse
	 */
	public function loadSnapshot(ContextInterface $ctx, LoadSnapshotRequest $request): LoadSnapshotResponse;


	/**
	 * Returns the layer snapshot identifier.
	 *
	 * @param ContextInterface $ctx
	 * @param MakeSnapshotRequest $request
	 *
	 * @return MakeSnapshotResponse
	 */
	public function makeSnapshot(ContextInterface $ctx, MakeSnapshotRequest $request): MakeSnapshotResponse;


	/**
	 * Call LayerTree.profileSnapshot command.
	 *
	 * @param ContextInterface $ctx
	 * @param ProfileSnapshotRequest $request
	 *
	 * @return ProfileSnapshotResponse
	 */
	public function profileSnapshot(ContextInterface $ctx, ProfileSnapshotRequest $request): ProfileSnapshotResponse;


	/**
	 * Releases layer snapshot captured by the back-end.
	 *
	 * @param ContextInterface $ctx
	 * @param ReleaseSnapshotRequest $request
	 *
	 * @return void
	 */
	public function releaseSnapshot(ContextInterface $ctx, ReleaseSnapshotRequest $request): void;


	/**
	 * Replays the layer snapshot and returns the resulting bitmap.
	 *
	 * @param ContextInterface $ctx
	 * @param ReplaySnapshotRequest $request
	 *
	 * @return ReplaySnapshotResponse
	 */
	public function replaySnapshot(ContextInterface $ctx, ReplaySnapshotRequest $request): ReplaySnapshotResponse;


	/**
	 * Replays the layer snapshot and returns canvas log.
	 *
	 * @param ContextInterface $ctx
	 * @param SnapshotCommandLogRequest $request
	 *
	 * @return SnapshotCommandLogResponse
	 */
	public function snapshotCommandLog(
		ContextInterface $ctx,
		SnapshotCommandLogRequest $request
	): SnapshotCommandLogResponse;


	/**
	 * Subscribe to LayerTree.layerPainted event.
	 *
	 * Listener will be called whenever event LayerTree.layerPainted is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addLayerPaintedListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for LayerTree.layerPainted event.
	 *
	 * Method will block until first LayerTree.layerPainted event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return LayerPaintedEvent
	 */
	public function awaitLayerPainted(ContextInterface $ctx): LayerPaintedEvent;


	/**
	 * Subscribe to LayerTree.layerTreeDidChange event.
	 *
	 * Listener will be called whenever event LayerTree.layerTreeDidChange is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addLayerTreeDidChangeListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for LayerTree.layerTreeDidChange event.
	 *
	 * Method will block until first LayerTree.layerTreeDidChange event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return LayerTreeDidChangeEvent
	 */
	public function awaitLayerTreeDidChange(ContextInterface $ctx): LayerTreeDidChangeEvent;
}
