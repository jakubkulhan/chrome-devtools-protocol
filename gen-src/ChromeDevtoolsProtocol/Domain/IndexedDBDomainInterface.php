<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\IndexedDB\ClearObjectStoreRequest;
use ChromeDevtoolsProtocol\Model\IndexedDB\DeleteDatabaseRequest;
use ChromeDevtoolsProtocol\Model\IndexedDB\DeleteObjectStoreEntriesRequest;
use ChromeDevtoolsProtocol\Model\IndexedDB\GetMetadataRequest;
use ChromeDevtoolsProtocol\Model\IndexedDB\GetMetadataResponse;
use ChromeDevtoolsProtocol\Model\IndexedDB\RequestDataRequest;
use ChromeDevtoolsProtocol\Model\IndexedDB\RequestDataResponse;
use ChromeDevtoolsProtocol\Model\IndexedDB\RequestDatabaseNamesRequest;
use ChromeDevtoolsProtocol\Model\IndexedDB\RequestDatabaseNamesResponse;
use ChromeDevtoolsProtocol\Model\IndexedDB\RequestDatabaseRequest;
use ChromeDevtoolsProtocol\Model\IndexedDB\RequestDatabaseResponse;

/**
 * IndexedDB domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface IndexedDBDomainInterface
{
	/**
	 * Clears all entries from an object store.
	 *
	 * @param ContextInterface $ctx
	 * @param ClearObjectStoreRequest $request
	 *
	 * @return void
	 */
	public function clearObjectStore(ContextInterface $ctx, ClearObjectStoreRequest $request): void;


	/**
	 * Deletes a database.
	 *
	 * @param ContextInterface $ctx
	 * @param DeleteDatabaseRequest $request
	 *
	 * @return void
	 */
	public function deleteDatabase(ContextInterface $ctx, DeleteDatabaseRequest $request): void;


	/**
	 * Delete a range of entries from an object store
	 *
	 * @param ContextInterface $ctx
	 * @param DeleteObjectStoreEntriesRequest $request
	 *
	 * @return void
	 */
	public function deleteObjectStoreEntries(ContextInterface $ctx, DeleteObjectStoreEntriesRequest $request): void;


	/**
	 * Disables events from backend.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables events from backend.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Gets metadata of an object store.
	 *
	 * @param ContextInterface $ctx
	 * @param GetMetadataRequest $request
	 *
	 * @return GetMetadataResponse
	 */
	public function getMetadata(ContextInterface $ctx, GetMetadataRequest $request): GetMetadataResponse;


	/**
	 * Requests data from object store or index.
	 *
	 * @param ContextInterface $ctx
	 * @param RequestDataRequest $request
	 *
	 * @return RequestDataResponse
	 */
	public function requestData(ContextInterface $ctx, RequestDataRequest $request): RequestDataResponse;


	/**
	 * Requests database with given name in given frame.
	 *
	 * @param ContextInterface $ctx
	 * @param RequestDatabaseRequest $request
	 *
	 * @return RequestDatabaseResponse
	 */
	public function requestDatabase(ContextInterface $ctx, RequestDatabaseRequest $request): RequestDatabaseResponse;


	/**
	 * Requests database names for given security origin.
	 *
	 * @param ContextInterface $ctx
	 * @param RequestDatabaseNamesRequest $request
	 *
	 * @return RequestDatabaseNamesResponse
	 */
	public function requestDatabaseNames(
		ContextInterface $ctx,
		RequestDatabaseNamesRequest $request
	): RequestDatabaseNamesResponse;
}
