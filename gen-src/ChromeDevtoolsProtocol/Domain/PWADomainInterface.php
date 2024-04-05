<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\PWA\GetOsAppStateRequest;
use ChromeDevtoolsProtocol\Model\PWA\GetOsAppStateResponse;

/**
 * This domain allows interacting with the browser to control PWAs.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface PWADomainInterface
{
	/**
	 * Returns the following OS state for the given manifest id.
	 *
	 * @param ContextInterface $ctx
	 * @param GetOsAppStateRequest $request
	 *
	 * @return GetOsAppStateResponse
	 */
	public function getOsAppState(ContextInterface $ctx, GetOsAppStateRequest $request): GetOsAppStateResponse;
}
