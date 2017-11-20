<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\CacheStorage\DeleteCacheRequest;
use ChromeDevtoolsProtocol\Model\CacheStorage\DeleteEntryRequest;
use ChromeDevtoolsProtocol\Model\CacheStorage\RequestCacheNamesRequest;
use ChromeDevtoolsProtocol\Model\CacheStorage\RequestCacheNamesResponse;
use ChromeDevtoolsProtocol\Model\CacheStorage\RequestCachedResponseRequest;
use ChromeDevtoolsProtocol\Model\CacheStorage\RequestCachedResponseResponse;
use ChromeDevtoolsProtocol\Model\CacheStorage\RequestEntriesRequest;
use ChromeDevtoolsProtocol\Model\CacheStorage\RequestEntriesResponse;

class CacheStorageDomain implements CacheStorageDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function requestCacheNames(ContextInterface $ctx, RequestCacheNamesRequest $request): RequestCacheNamesResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CacheStorage.requestCacheNames', $request);
		return RequestCacheNamesResponse::fromJson($response);
	}


	public function requestEntries(ContextInterface $ctx, RequestEntriesRequest $request): RequestEntriesResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CacheStorage.requestEntries', $request);
		return RequestEntriesResponse::fromJson($response);
	}


	public function deleteCache(ContextInterface $ctx, DeleteCacheRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'CacheStorage.deleteCache', $request);
	}


	public function deleteEntry(ContextInterface $ctx, DeleteEntryRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'CacheStorage.deleteEntry', $request);
	}


	public function requestCachedResponse(ContextInterface $ctx, RequestCachedResponseRequest $request): RequestCachedResponseResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'CacheStorage.requestCachedResponse', $request);
		return RequestCachedResponseResponse::fromJson($response);
	}
}
