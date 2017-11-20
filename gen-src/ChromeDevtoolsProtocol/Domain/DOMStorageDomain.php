<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\DOMStorage\ClearRequest;
use ChromeDevtoolsProtocol\Model\DOMStorage\DomStorageItemAddedEvent;
use ChromeDevtoolsProtocol\Model\DOMStorage\DomStorageItemRemovedEvent;
use ChromeDevtoolsProtocol\Model\DOMStorage\DomStorageItemUpdatedEvent;
use ChromeDevtoolsProtocol\Model\DOMStorage\DomStorageItemsClearedEvent;
use ChromeDevtoolsProtocol\Model\DOMStorage\GetDOMStorageItemsRequest;
use ChromeDevtoolsProtocol\Model\DOMStorage\GetDOMStorageItemsResponse;
use ChromeDevtoolsProtocol\Model\DOMStorage\RemoveDOMStorageItemRequest;
use ChromeDevtoolsProtocol\Model\DOMStorage\SetDOMStorageItemRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class DOMStorageDomain implements DOMStorageDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'DOMStorage.enable', $request);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'DOMStorage.disable', $request);
	}


	public function clear(ContextInterface $ctx, ClearRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOMStorage.clear', $request);
	}


	public function getDOMStorageItems(ContextInterface $ctx, GetDOMStorageItemsRequest $request): GetDOMStorageItemsResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOMStorage.getDOMStorageItems', $request);
		return GetDOMStorageItemsResponse::fromJson($response);
	}


	public function setDOMStorageItem(ContextInterface $ctx, SetDOMStorageItemRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOMStorage.setDOMStorageItem', $request);
	}


	public function removeDOMStorageItem(ContextInterface $ctx, RemoveDOMStorageItemRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOMStorage.removeDOMStorageItem', $request);
	}


	public function addDomStorageItemsClearedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOMStorage.domStorageItemsCleared', $listener);
	}


	public function awaitDomStorageItemsCleared(ContextInterface $ctx): DomStorageItemsClearedEvent
	{
		return DomStorageItemsClearedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOMStorage.domStorageItemsCleared'));
	}


	public function addDomStorageItemRemovedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOMStorage.domStorageItemRemoved', $listener);
	}


	public function awaitDomStorageItemRemoved(ContextInterface $ctx): DomStorageItemRemovedEvent
	{
		return DomStorageItemRemovedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOMStorage.domStorageItemRemoved'));
	}


	public function addDomStorageItemAddedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOMStorage.domStorageItemAdded', $listener);
	}


	public function awaitDomStorageItemAdded(ContextInterface $ctx): DomStorageItemAddedEvent
	{
		return DomStorageItemAddedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOMStorage.domStorageItemAdded'));
	}


	public function addDomStorageItemUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOMStorage.domStorageItemUpdated', $listener);
	}


	public function awaitDomStorageItemUpdated(ContextInterface $ctx): DomStorageItemUpdatedEvent
	{
		return DomStorageItemUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOMStorage.domStorageItemUpdated'));
	}
}
