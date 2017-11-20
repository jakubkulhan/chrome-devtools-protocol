<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\HeadlessExperimental\BeginFrameRequest;
use ChromeDevtoolsProtocol\Model\HeadlessExperimental\BeginFrameResponse;
use ChromeDevtoolsProtocol\Model\HeadlessExperimental\MainFrameReadyForScreenshotsEvent;
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
	 * Enables headless events for the target.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Disables headless events for the target.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Sends a BeginFrame to the target and returns when the frame was completed. Optionally captures a screenshot from the resulting frame. Requires that the target was created with enabled BeginFrameControl.
	 *
	 * @param ContextInterface $ctx
	 * @param BeginFrameRequest $request
	 *
	 * @return BeginFrameResponse
	 */
	public function beginFrame(ContextInterface $ctx, BeginFrameRequest $request): BeginFrameResponse;


	/**
	 * Issued when the target starts or stops needing BeginFrames.
	 *
	 * Listener will be called whenever event HeadlessExperimental.needsBeginFramesChanged is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addNeedsBeginFramesChangedListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when the target starts or stops needing BeginFrames.
	 *
	 * Method will block until first HeadlessExperimental.needsBeginFramesChanged event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return NeedsBeginFramesChangedEvent
	 */
	public function awaitNeedsBeginFramesChanged(ContextInterface $ctx): NeedsBeginFramesChangedEvent;


	/**
	 * Issued when the main frame has first submitted a frame to the browser. May only be fired while a BeginFrame is in flight. Before this event, screenshotting requests may fail.
	 *
	 * Listener will be called whenever event HeadlessExperimental.mainFrameReadyForScreenshots is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addMainFrameReadyForScreenshotsListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when the main frame has first submitted a frame to the browser. May only be fired while a BeginFrame is in flight. Before this event, screenshotting requests may fail.
	 *
	 * Method will block until first HeadlessExperimental.mainFrameReadyForScreenshots event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return MainFrameReadyForScreenshotsEvent
	 */
	public function awaitMainFrameReadyForScreenshots(ContextInterface $ctx): MainFrameReadyForScreenshotsEvent;
}
