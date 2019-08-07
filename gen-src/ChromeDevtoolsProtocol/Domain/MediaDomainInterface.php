<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Media\PlayerEventsAddedEvent;
use ChromeDevtoolsProtocol\Model\Media\PlayerPropertiesChangedEvent;
use ChromeDevtoolsProtocol\Model\Media\PlayersCreatedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * This domain allows detailed inspection of media elements
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


	/**
	 * Called whenever a player is created, or when a new agent joins and recieves a list of active players. If an agent is restored, it will recieve the full list of player ids and all events again.
	 *
	 * Listener will be called whenever event Media.playersCreated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addPlayersCreatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Called whenever a player is created, or when a new agent joins and recieves a list of active players. If an agent is restored, it will recieve the full list of player ids and all events again.
	 *
	 * Method will block until first Media.playersCreated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return PlayersCreatedEvent
	 */
	public function awaitPlayersCreated(ContextInterface $ctx): PlayersCreatedEvent;
}
