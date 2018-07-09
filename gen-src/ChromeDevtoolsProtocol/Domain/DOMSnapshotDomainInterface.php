<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\DOMSnapshot\CaptureSnapshotRequest;
use ChromeDevtoolsProtocol\Model\DOMSnapshot\CaptureSnapshotResponse;
use ChromeDevtoolsProtocol\Model\DOMSnapshot\GetSnapshotRequest;
use ChromeDevtoolsProtocol\Model\DOMSnapshot\GetSnapshotResponse;

/**
 * This domain facilitates obtaining document snapshots with DOM, layout, and style information.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface DOMSnapshotDomainInterface
{
	/**
	 * Returns a document snapshot, including the full DOM tree of the root node (including iframes, template contents, and imported documents) in a flattened array, as well as layout and white-listed computed style information for the nodes. Shadow DOM in the returned DOM tree is flattened.
	 *
	 * @param ContextInterface $ctx
	 * @param CaptureSnapshotRequest $request
	 *
	 * @return CaptureSnapshotResponse
	 */
	public function captureSnapshot(ContextInterface $ctx, CaptureSnapshotRequest $request): CaptureSnapshotResponse;


	/**
	 * Disables DOM snapshot agent for the given page.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables DOM snapshot agent for the given page.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Returns a document snapshot, including the full DOM tree of the root node (including iframes, template contents, and imported documents) in a flattened array, as well as layout and white-listed computed style information for the nodes. Shadow DOM in the returned DOM tree is flattened.
	 *
	 * @param ContextInterface $ctx
	 * @param GetSnapshotRequest $request
	 *
	 * @return GetSnapshotResponse
	 */
	public function getSnapshot(ContextInterface $ctx, GetSnapshotRequest $request): GetSnapshotResponse;
}
