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
