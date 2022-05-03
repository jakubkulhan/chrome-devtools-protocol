<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\HeadlessExperimental\BeginFrameRequest;
use ChromeDevtoolsProtocol\Model\HeadlessExperimental\BeginFrameResponse;
use ChromeDevtoolsProtocol\Model\HeadlessExperimental\NeedsBeginFramesChangedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * This domain provides experimental commands only supported in headless mode.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface HeadlessExperimentalDomainInterface
{
	/**
	 * Sends a BeginFrame to the target and returns when the frame was completed. Optionally captures a screenshot from the resulting frame. Requires that the target was created with enabled BeginFrameControl. Designed for use with --run-all-compositor-stages-before-draw, see also https://goo.gle/chrome-headless-rendering for more background.
	 *
	 * @param ContextInterface $ctx
	 * @param BeginFrameRequest $request
	 *
	 * @return BeginFrameResponse
	 */
	public function beginFrame(ContextInterface $ctx, BeginFrameRequest $request): BeginFrameResponse;


	/**
	 * Disables headless events for the target.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables headless events for the target.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Issued when the target starts or stops needing BeginFrames. Deprecated. Issue beginFrame unconditionally instead and use result from beginFrame to detect whether the frames were suppressed.
	 *
	 * Listener will be called whenever event HeadlessExperimental.needsBeginFramesChanged is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addNeedsBeginFramesChangedListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when the target starts or stops needing BeginFrames. Deprecated. Issue beginFrame unconditionally instead and use result from beginFrame to detect whether the frames were suppressed.
	 *
	 * Method will block until first HeadlessExperimental.needsBeginFramesChanged event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return NeedsBeginFramesChangedEvent
	 */
	public function awaitNeedsBeginFramesChanged(ContextInterface $ctx): NeedsBeginFramesChangedEvent;
}
