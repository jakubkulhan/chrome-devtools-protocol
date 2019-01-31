<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Accessibility\GetFullAXTreeResponse;
use ChromeDevtoolsProtocol\Model\Accessibility\GetPartialAXTreeRequest;
use ChromeDevtoolsProtocol\Model\Accessibility\GetPartialAXTreeResponse;

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
	 * Fetches the entire accessibility tree
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetFullAXTreeResponse
	 */
	public function getFullAXTree(ContextInterface $ctx): GetFullAXTreeResponse;


	/**
	 * Fetches the accessibility node and partial accessibility tree for this DOM node, if it exists.
	 *
	 * @param ContextInterface $ctx
	 * @param GetPartialAXTreeRequest $request
	 *
	 * @return GetPartialAXTreeResponse
	 */
	public function getPartialAXTree(ContextInterface $ctx, GetPartialAXTreeRequest $request): GetPartialAXTreeResponse;
}
