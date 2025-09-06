<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\PWA\ChangeAppUserSettingsRequest;
use ChromeDevtoolsProtocol\Model\PWA\GetOsAppStateRequest;
use ChromeDevtoolsProtocol\Model\PWA\GetOsAppStateResponse;
use ChromeDevtoolsProtocol\Model\PWA\InstallRequest;
use ChromeDevtoolsProtocol\Model\PWA\LaunchFilesInAppRequest;
use ChromeDevtoolsProtocol\Model\PWA\LaunchFilesInAppResponse;
use ChromeDevtoolsProtocol\Model\PWA\LaunchRequest;
use ChromeDevtoolsProtocol\Model\PWA\LaunchResponse;
use ChromeDevtoolsProtocol\Model\PWA\OpenCurrentPageInAppRequest;
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
	 * Changes user settings of the web app identified by its manifestId. If the app was not installed, this command returns an error. Unset parameters will be ignored; unrecognized values will cause an error. Unlike the ones defined in the manifest files of the web apps, these settings are provided by the browser and controlled by the users, they impact the way the browser handling the web apps. See the comment of each parameter.
	 *
	 * @param ContextInterface $ctx
	 * @param ChangeAppUserSettingsRequest $request
	 *
	 * @return void
	 */
	public function changeAppUserSettings(ContextInterface $ctx, ChangeAppUserSettingsRequest $request): void;


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
	 * Installs the given manifest identity, optionally using the given installUrlOrBundleUrl IWA-specific install description: manifestId corresponds to isolated-app:// + web_package::SignedWebBundleId File installation mode: The installUrlOrBundleUrl can be either file:// or http(s):// pointing to a signed web bundle (.swbn). In this case SignedWebBundleId must correspond to The .swbn file's signing key. Dev proxy installation mode: installUrlOrBundleUrl must be http(s):// that serves dev mode IWA. web_package::SignedWebBundleId must be of type dev proxy. The advantage of dev proxy mode is that all changes to IWA automatically will be reflected in the running app without reinstallation. To generate bundle id for proxy mode: 1. Generate 32 random bytes. 2. Add a specific suffix at the end following the documentation https://github.com/WICG/isolated-web-apps/blob/main/Scheme.md#suffix 3. Encode the entire sequence using Base32 without padding. If Chrome is not in IWA dev mode, the installation will fail, regardless of the state of the allowlist.
	 *
	 * @param ContextInterface $ctx
	 * @param InstallRequest $request
	 *
	 * @return void
	 */
	public function install(ContextInterface $ctx, InstallRequest $request): void;


	/**
	 * Launches the installed web app, or an url in the same web app instead of the default start url if it is provided. Returns a page Target.TargetID which can be used to attach to via Target.attachToTarget or similar APIs.
	 *
	 * @param ContextInterface $ctx
	 * @param LaunchRequest $request
	 *
	 * @return LaunchResponse
	 */
	public function launch(ContextInterface $ctx, LaunchRequest $request): LaunchResponse;


	/**
	 * Opens one or more local files from an installed web app identified by its manifestId. The web app needs to have file handlers registered to process the files. The API returns one or more page Target.TargetIDs which can be used to attach to via Target.attachToTarget or similar APIs. If some files in the parameters cannot be handled by the web app, they will be ignored. If none of the files can be handled, this API returns an error. If no files are provided as the parameter, this API also returns an error. According to the definition of the file handlers in the manifest file, one Target.TargetID may represent a page handling one or more files. The order of the returned Target.TargetIDs is not guaranteed. TODO(crbug.com/339454034): Check the existences of the input files.
	 *
	 * @param ContextInterface $ctx
	 * @param LaunchFilesInAppRequest $request
	 *
	 * @return LaunchFilesInAppResponse
	 */
	public function launchFilesInApp(ContextInterface $ctx, LaunchFilesInAppRequest $request): LaunchFilesInAppResponse;


	/**
	 * Opens the current page in its web app identified by the manifest id, needs to be called on a page target. This function returns immediately without waiting for the app to finish loading.
	 *
	 * @param ContextInterface $ctx
	 * @param OpenCurrentPageInAppRequest $request
	 *
	 * @return void
	 */
	public function openCurrentPageInApp(ContextInterface $ctx, OpenCurrentPageInAppRequest $request): void;


	/**
	 * Uninstalls the given manifest_id and closes any opened app windows.
	 *
	 * @param ContextInterface $ctx
	 * @param UninstallRequest $request
	 *
	 * @return void
	 */
	public function uninstall(ContextInterface $ctx, UninstallRequest $request): void;
}
