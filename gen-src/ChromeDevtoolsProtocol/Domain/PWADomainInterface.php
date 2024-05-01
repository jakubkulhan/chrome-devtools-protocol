<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\PWA\GetOsAppStateRequest;
use ChromeDevtoolsProtocol\Model\PWA\GetOsAppStateResponse;
use ChromeDevtoolsProtocol\Model\PWA\InstallRequest;
use ChromeDevtoolsProtocol\Model\PWA\UninstallRequest;

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


	/**
	 * Installs the given manifest identity, optionally using the given install_url or IWA bundle location. TODO(crbug.com/337872319) Support IWA to meet the following specific requirement. IWA-specific install description: If the manifest_id is isolated-app://, install_url_or_bundle_url is required, and can be either an http(s) URL or file:// URL pointing to a signed web bundle (.swbn). The .swbn file’s signing key must correspond to manifest_id. If Chrome is not in IWA dev mode, the installation will fail, regardless of the state of the allowlist.
	 *
	 * @param ContextInterface $ctx
	 * @param InstallRequest $request
	 *
	 * @return void
	 */
	public function install(ContextInterface $ctx, InstallRequest $request): void;


	/**
	 * Uninstals the given manifest_id and closes any opened app windows.
	 *
	 * @param ContextInterface $ctx
	 * @param UninstallRequest $request
	 *
	 * @return void
	 */
	public function uninstall(ContextInterface $ctx, UninstallRequest $request): void;
}
