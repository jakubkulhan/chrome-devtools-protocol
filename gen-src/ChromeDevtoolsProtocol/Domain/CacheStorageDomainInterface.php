<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\CacheStorage\DeleteCacheRequest;
use ChromeDevtoolsProtocol\Model\CacheStorage\DeleteEntryRequest;
use ChromeDevtoolsProtocol\Model\CacheStorage\RequestCacheNamesRequest;
use ChromeDevtoolsProtocol\Model\CacheStorage\RequestCacheNamesResponse;
use ChromeDevtoolsProtocol\Model\CacheStorage\RequestCachedResponseRequest;
use ChromeDevtoolsProtocol\Model\CacheStorage\RequestCachedResponseResponse;
use ChromeDevtoolsProtocol\Model\CacheStorage\RequestEntriesRequest;
use ChromeDevtoolsProtocol\Model\CacheStorage\RequestEntriesResponse;

/**
 * CacheStorage domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface CacheStorageDomainInterface
{
	/**
	 * Deletes a cache.
	 *
	 * @param ContextInterface $ctx
	 * @param DeleteCacheRequest $request
	 *
	 * @return void
	 */
	public function deleteCache(ContextInterface $ctx, DeleteCacheRequest $request): void;


	/**
	 * Deletes a cache entry.
	 *
	 * @param ContextInterface $ctx
	 * @param DeleteEntryRequest $request
	 *
	 * @return void
	 */
	public function deleteEntry(ContextInterface $ctx, DeleteEntryRequest $request): void;


	/**
	 * Fetches cache entry.
	 *
	 * @param ContextInterface $ctx
	 * @param RequestCachedResponseRequest $request
	 *
	 * @return RequestCachedResponseResponse
	 */
	public function requestCachedResponse(ContextInterface $ctx, RequestCachedResponseRequest $request): RequestCachedResponseResponse;


	/**
	 * Requests cache names.
	 *
	 * @param ContextInterface $ctx
	 * @param RequestCacheNamesRequest $request
	 *
	 * @return RequestCacheNamesResponse
	 */
	public function requestCacheNames(ContextInterface $ctx, RequestCacheNamesRequest $request): RequestCacheNamesResponse;


	/**
	 * Requests data from cache.
	 *
	 * @param ContextInterface $ctx
	 * @param RequestEntriesRequest $request
	 *
	 * @return RequestEntriesResponse
	 */
	public function requestEntries(ContextInterface $ctx, RequestEntriesRequest $request): RequestEntriesResponse;
}
