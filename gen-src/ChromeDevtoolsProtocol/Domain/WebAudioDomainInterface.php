<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\WebAudio\ContextChangedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\ContextCreatedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\ContextWillBeDestroyedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\GetRealtimeDataRequest;
use ChromeDevtoolsProtocol\Model\WebAudio\GetRealtimeDataResponse;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * This domain allows inspection of Web Audio API. https://webaudio.github.io/web-audio-api/
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface WebAudioDomainInterface
{
	/**
	 * Disables the WebAudio domain.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables the WebAudio domain and starts sending context lifetime events.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Fetch the realtime data from the registered contexts.
	 *
	 * @param ContextInterface $ctx
	 * @param GetRealtimeDataRequest $request
	 *
	 * @return GetRealtimeDataResponse
	 */
	public function getRealtimeData(ContextInterface $ctx, GetRealtimeDataRequest $request): GetRealtimeDataResponse;


	/**
	 * Notifies that existing BaseAudioContext has changed some properties (id stays the same)..
	 *
	 * Listener will be called whenever event WebAudio.contextChanged is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addContextChangedListener(callable $listener): SubscriptionInterface;


	/**
	 * Notifies that existing BaseAudioContext has changed some properties (id stays the same)..
	 *
	 * Method will block until first WebAudio.contextChanged event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ContextChangedEvent
	 */
	public function awaitContextChanged(ContextInterface $ctx): ContextChangedEvent;


	/**
	 * Notifies that a new BaseAudioContext has been created.
	 *
	 * Listener will be called whenever event WebAudio.contextCreated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addContextCreatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Notifies that a new BaseAudioContext has been created.
	 *
	 * Method will block until first WebAudio.contextCreated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ContextCreatedEvent
	 */
	public function awaitContextCreated(ContextInterface $ctx): ContextCreatedEvent;


	/**
	 * Notifies that an existing BaseAudioContext will be destroyed.
	 *
	 * Listener will be called whenever event WebAudio.contextWillBeDestroyed is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addContextWillBeDestroyedListener(callable $listener): SubscriptionInterface;


	/**
	 * Notifies that an existing BaseAudioContext will be destroyed.
	 *
	 * Method will block until first WebAudio.contextWillBeDestroyed event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ContextWillBeDestroyedEvent
	 */
	public function awaitContextWillBeDestroyed(ContextInterface $ctx): ContextWillBeDestroyedEvent;
}
