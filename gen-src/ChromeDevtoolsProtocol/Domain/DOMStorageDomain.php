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


	public function clear(ContextInterface $ctx, ClearRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOMStorage.clear', $request);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'DOMStorage.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'DOMStorage.enable', $request);
	}


	public function getDOMStorageItems(ContextInterface $ctx, GetDOMStorageItemsRequest $request): GetDOMStorageItemsResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOMStorage.getDOMStorageItems', $request);
		return GetDOMStorageItemsResponse::fromJson($response);
	}


	public function removeDOMStorageItem(ContextInterface $ctx, RemoveDOMStorageItemRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOMStorage.removeDOMStorageItem', $request);
	}


	public function setDOMStorageItem(ContextInterface $ctx, SetDOMStorageItemRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOMStorage.setDOMStorageItem', $request);
	}


	public function addDomStorageItemAddedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOMStorage.domStorageItemAdded', function ($event) use ($listener) {
			return $listener(DomStorageItemAddedEvent::fromJson($event));
		});
	}


	public function awaitDomStorageItemAdded(ContextInterface $ctx): DomStorageItemAddedEvent
	{
		return DomStorageItemAddedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOMStorage.domStorageItemAdded'));
	}


	public function addDomStorageItemRemovedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOMStorage.domStorageItemRemoved', function ($event) use ($listener) {
			return $listener(DomStorageItemRemovedEvent::fromJson($event));
		});
	}


	public function awaitDomStorageItemRemoved(ContextInterface $ctx): DomStorageItemRemovedEvent
	{
		return DomStorageItemRemovedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOMStorage.domStorageItemRemoved'));
	}


	public function addDomStorageItemsClearedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOMStorage.domStorageItemsCleared', function ($event) use ($listener) {
			return $listener(DomStorageItemsClearedEvent::fromJson($event));
		});
	}


	public function awaitDomStorageItemsCleared(ContextInterface $ctx): DomStorageItemsClearedEvent
	{
		return DomStorageItemsClearedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOMStorage.domStorageItemsCleared'));
	}


	public function addDomStorageItemUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DOMStorage.domStorageItemUpdated', function ($event) use ($listener) {
			return $listener(DomStorageItemUpdatedEvent::fromJson($event));
		});
	}


	public function awaitDomStorageItemUpdated(ContextInterface $ctx): DomStorageItemUpdatedEvent
	{
		return DomStorageItemUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DOMStorage.domStorageItemUpdated'));
	}
}
