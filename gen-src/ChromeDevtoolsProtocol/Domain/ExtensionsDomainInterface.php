<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Extensions\GetStorageItemsRequest;
use ChromeDevtoolsProtocol\Model\Extensions\GetStorageItemsResponse;
use ChromeDevtoolsProtocol\Model\Extensions\LoadUnpackedRequest;
use ChromeDevtoolsProtocol\Model\Extensions\LoadUnpackedResponse;

/**
 * Defines commands and events for browser extensions.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface ExtensionsDomainInterface
{
	/**
	 * Gets data from extension storage in the given `area`. If `keys` is specified, these are used to filter the result.
	 *
	 * @param ContextInterface $ctx
	 * @param GetStorageItemsRequest $request
	 *
	 * @return GetStorageItemsResponse
	 */
	public function getStorageItems(ContextInterface $ctx, GetStorageItemsRequest $request): GetStorageItemsResponse;


	/**
	 * Installs an unpacked extension from the filesystem similar to --load-extension CLI flags. Returns extension ID once the extension has been installed. Available if the client is connected using the --remote-debugging-pipe flag and the --enable-unsafe-extension-debugging flag is set.
	 *
	 * @param ContextInterface $ctx
	 * @param LoadUnpackedRequest $request
	 *
	 * @return LoadUnpackedResponse
	 */
	public function loadUnpacked(ContextInterface $ctx, LoadUnpackedRequest $request): LoadUnpackedResponse;
}
