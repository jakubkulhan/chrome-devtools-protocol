<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\HeadlessExperimental\BeginFrameRequest;
use ChromeDevtoolsProtocol\Model\HeadlessExperimental\BeginFrameResponse;

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
}
