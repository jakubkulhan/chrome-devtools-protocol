<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Media\PlayerCreatedEvent;
use ChromeDevtoolsProtocol\Model\Media\PlayerErrorsRaisedEvent;
use ChromeDevtoolsProtocol\Model\Media\PlayerEventsAddedEvent;
use ChromeDevtoolsProtocol\Model\Media\PlayerMessagesLoggedEvent;
use ChromeDevtoolsProtocol\Model\Media\PlayerPropertiesChangedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * This domain allows detailed inspection of media elements.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface MediaDomainInterface
{
	/**
	 * Disables the Media domain.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables the Media domain
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Called whenever a player is created, or when a new agent joins and receives a list of active players. If an agent is restored, it will receive one event for each active player.
	 *
	 * Listener will be called whenever event Media.playerCreated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addPlayerCreatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Called whenever a player is created, or when a new agent joins and receives a list of active players. If an agent is restored, it will receive one event for each active player.
	 *
	 * Method will block until first Media.playerCreated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return PlayerCreatedEvent
	 */
	public function awaitPlayerCreated(ContextInterface $ctx): PlayerCreatedEvent;


	/**
	 * Send a list of any errors that need to be delivered.
	 *
	 * Listener will be called whenever event Media.playerErrorsRaised is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addPlayerErrorsRaisedListener(callable $listener): SubscriptionInterface;


	/**
	 * Send a list of any errors that need to be delivered.
	 *
	 * Method will block until first Media.playerErrorsRaised event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return PlayerErrorsRaisedEvent
	 */
	public function awaitPlayerErrorsRaised(ContextInterface $ctx): PlayerErrorsRaisedEvent;


	/**
	 * Send events as a list, allowing them to be batched on the browser for less congestion. If batched, events must ALWAYS be in chronological order.
	 *
	 * Listener will be called whenever event Media.playerEventsAdded is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addPlayerEventsAddedListener(callable $listener): SubscriptionInterface;


	/**
	 * Send events as a list, allowing them to be batched on the browser for less congestion. If batched, events must ALWAYS be in chronological order.
	 *
	 * Method will block until first Media.playerEventsAdded event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return PlayerEventsAddedEvent
	 */
	public function awaitPlayerEventsAdded(ContextInterface $ctx): PlayerEventsAddedEvent;


	/**
	 * Send a list of any messages that need to be delivered.
	 *
	 * Listener will be called whenever event Media.playerMessagesLogged is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addPlayerMessagesLoggedListener(callable $listener): SubscriptionInterface;


	/**
	 * Send a list of any messages that need to be delivered.
	 *
	 * Method will block until first Media.playerMessagesLogged event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return PlayerMessagesLoggedEvent
	 */
	public function awaitPlayerMessagesLogged(ContextInterface $ctx): PlayerMessagesLoggedEvent;


	/**
	 * This can be called multiple times, and can be used to set / override / remove player properties. A null propValue indicates removal.
	 *
	 * Listener will be called whenever event Media.playerPropertiesChanged is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addPlayerPropertiesChangedListener(callable $listener): SubscriptionInterface;


	/**
	 * This can be called multiple times, and can be used to set / override / remove player properties. A null propValue indicates removal.
	 *
	 * Method will block until first Media.playerPropertiesChanged event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return PlayerPropertiesChangedEvent
	 */
	public function awaitPlayerPropertiesChanged(ContextInterface $ctx): PlayerPropertiesChangedEvent;
}
