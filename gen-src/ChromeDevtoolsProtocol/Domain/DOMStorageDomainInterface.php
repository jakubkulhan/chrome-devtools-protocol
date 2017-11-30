<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
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

/**
 * Query and modify DOM storage.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface DOMStorageDomainInterface
{
	/**
	 * Call DOMStorage.clear command.
	 *
	 * @param ContextInterface $ctx
	 * @param ClearRequest $request
	 *
	 * @return void
	 */
	public function clear(ContextInterface $ctx, ClearRequest $request): void;


	/**
	 * Disables storage tracking, prevents storage events from being sent to the client.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables storage tracking, storage events will now be delivered to the client.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Call DOMStorage.getDOMStorageItems command.
	 *
	 * @param ContextInterface $ctx
	 * @param GetDOMStorageItemsRequest $request
	 *
	 * @return GetDOMStorageItemsResponse
	 */
	public function getDOMStorageItems(ContextInterface $ctx, GetDOMStorageItemsRequest $request): GetDOMStorageItemsResponse;


	/**
	 * Call DOMStorage.removeDOMStorageItem command.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveDOMStorageItemRequest $request
	 *
	 * @return void
	 */
	public function removeDOMStorageItem(ContextInterface $ctx, RemoveDOMStorageItemRequest $request): void;


	/**
	 * Call DOMStorage.setDOMStorageItem command.
	 *
	 * @param ContextInterface $ctx
	 * @param SetDOMStorageItemRequest $request
	 *
	 * @return void
	 */
	public function setDOMStorageItem(ContextInterface $ctx, SetDOMStorageItemRequest $request): void;


	/**
	 * Subscribe to DOMStorage.domStorageItemAdded event.
	 *
	 * Listener will be called whenever event DOMStorage.domStorageItemAdded is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDomStorageItemAddedListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for DOMStorage.domStorageItemAdded event.
	 *
	 * Method will block until first DOMStorage.domStorageItemAdded event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DomStorageItemAddedEvent
	 */
	public function awaitDomStorageItemAdded(ContextInterface $ctx): DomStorageItemAddedEvent;


	/**
	 * Subscribe to DOMStorage.domStorageItemRemoved event.
	 *
	 * Listener will be called whenever event DOMStorage.domStorageItemRemoved is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDomStorageItemRemovedListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for DOMStorage.domStorageItemRemoved event.
	 *
	 * Method will block until first DOMStorage.domStorageItemRemoved event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DomStorageItemRemovedEvent
	 */
	public function awaitDomStorageItemRemoved(ContextInterface $ctx): DomStorageItemRemovedEvent;


	/**
	 * Subscribe to DOMStorage.domStorageItemsCleared event.
	 *
	 * Listener will be called whenever event DOMStorage.domStorageItemsCleared is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDomStorageItemsClearedListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for DOMStorage.domStorageItemsCleared event.
	 *
	 * Method will block until first DOMStorage.domStorageItemsCleared event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DomStorageItemsClearedEvent
	 */
	public function awaitDomStorageItemsCleared(ContextInterface $ctx): DomStorageItemsClearedEvent;


	/**
	 * Subscribe to DOMStorage.domStorageItemUpdated event.
	 *
	 * Listener will be called whenever event DOMStorage.domStorageItemUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDomStorageItemUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for DOMStorage.domStorageItemUpdated event.
	 *
	 * Method will block until first DOMStorage.domStorageItemUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DomStorageItemUpdatedEvent
	 */
	public function awaitDomStorageItemUpdated(ContextInterface $ctx): DomStorageItemUpdatedEvent;
}
