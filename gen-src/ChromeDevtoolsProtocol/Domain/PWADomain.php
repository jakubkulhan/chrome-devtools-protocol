<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
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

class PWADomain implements PWADomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function changeAppUserSettings(ContextInterface $ctx, ChangeAppUserSettingsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'PWA.changeAppUserSettings', $request);
	}


	public function getOsAppState(ContextInterface $ctx, GetOsAppStateRequest $request): GetOsAppStateResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'PWA.getOsAppState', $request);
		return GetOsAppStateResponse::fromJson($response);
	}


	public function install(ContextInterface $ctx, InstallRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'PWA.install', $request);
	}


	public function launch(ContextInterface $ctx, LaunchRequest $request): LaunchResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'PWA.launch', $request);
		return LaunchResponse::fromJson($response);
	}


	public function launchFilesInApp(ContextInterface $ctx, LaunchFilesInAppRequest $request): LaunchFilesInAppResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'PWA.launchFilesInApp', $request);
		return LaunchFilesInAppResponse::fromJson($response);
	}


	public function openCurrentPageInApp(ContextInterface $ctx, OpenCurrentPageInAppRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'PWA.openCurrentPageInApp', $request);
	}


	public function uninstall(ContextInterface $ctx, UninstallRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'PWA.uninstall', $request);
	}
}
