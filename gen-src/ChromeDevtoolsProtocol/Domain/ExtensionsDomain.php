<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Extensions\ClearStorageItemsRequest;
use ChromeDevtoolsProtocol\Model\Extensions\GetStorageItemsRequest;
use ChromeDevtoolsProtocol\Model\Extensions\GetStorageItemsResponse;
use ChromeDevtoolsProtocol\Model\Extensions\LoadUnpackedRequest;
use ChromeDevtoolsProtocol\Model\Extensions\LoadUnpackedResponse;
use ChromeDevtoolsProtocol\Model\Extensions\RemoveStorageItemsRequest;
use ChromeDevtoolsProtocol\Model\Extensions\SetStorageItemsRequest;
use ChromeDevtoolsProtocol\Model\Extensions\TriggerActionRequest;
use ChromeDevtoolsProtocol\Model\Extensions\UninstallRequest;

class ExtensionsDomain implements ExtensionsDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function clearStorageItems(ContextInterface $ctx, ClearStorageItemsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Extensions.clearStorageItems', $request);
	}


	public function getStorageItems(ContextInterface $ctx, GetStorageItemsRequest $request): GetStorageItemsResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Extensions.getStorageItems', $request);
		return GetStorageItemsResponse::fromJson($response);
	}


	public function loadUnpacked(ContextInterface $ctx, LoadUnpackedRequest $request): LoadUnpackedResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Extensions.loadUnpacked', $request);
		return LoadUnpackedResponse::fromJson($response);
	}


	public function removeStorageItems(ContextInterface $ctx, RemoveStorageItemsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Extensions.removeStorageItems', $request);
	}


	public function setStorageItems(ContextInterface $ctx, SetStorageItemsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Extensions.setStorageItems', $request);
	}


	public function triggerAction(ContextInterface $ctx, TriggerActionRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Extensions.triggerAction', $request);
	}


	public function uninstall(ContextInterface $ctx, UninstallRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Extensions.uninstall', $request);
	}
}
