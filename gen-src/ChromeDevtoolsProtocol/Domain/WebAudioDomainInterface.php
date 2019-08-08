<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\WebAudio\AudioListenerCreatedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\AudioListenerWillBeDestroyedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\AudioNodeCreatedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\AudioNodeWillBeDestroyedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\AudioParamCreatedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\AudioParamWillBeDestroyedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\ContextChangedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\ContextCreatedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\ContextWillBeDestroyedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\GetRealtimeDataRequest;
use ChromeDevtoolsProtocol\Model\WebAudio\GetRealtimeDataResponse;
use ChromeDevtoolsProtocol\Model\WebAudio\NodeParamConnectedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\NodeParamDisconnectedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\NodesConnectedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\NodesDisconnectedEvent;
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
	 * Notifies that the construction of an AudioListener has finished.
	 *
	 * Listener will be called whenever event WebAudio.audioListenerCreated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addAudioListenerCreatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Notifies that the construction of an AudioListener has finished.
	 *
	 * Method will block until first WebAudio.audioListenerCreated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return AudioListenerCreatedEvent
	 */
	public function awaitAudioListenerCreated(ContextInterface $ctx): AudioListenerCreatedEvent;


	/**
	 * Notifies that a new AudioListener has been created.
	 *
	 * Listener will be called whenever event WebAudio.audioListenerWillBeDestroyed is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addAudioListenerWillBeDestroyedListener(callable $listener): SubscriptionInterface;


	/**
	 * Notifies that a new AudioListener has been created.
	 *
	 * Method will block until first WebAudio.audioListenerWillBeDestroyed event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return AudioListenerWillBeDestroyedEvent
	 */
	public function awaitAudioListenerWillBeDestroyed(ContextInterface $ctx): AudioListenerWillBeDestroyedEvent;


	/**
	 * Notifies that a new AudioNode has been created.
	 *
	 * Listener will be called whenever event WebAudio.audioNodeCreated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addAudioNodeCreatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Notifies that a new AudioNode has been created.
	 *
	 * Method will block until first WebAudio.audioNodeCreated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return AudioNodeCreatedEvent
	 */
	public function awaitAudioNodeCreated(ContextInterface $ctx): AudioNodeCreatedEvent;


	/**
	 * Notifies that an existing AudioNode has been destroyed.
	 *
	 * Listener will be called whenever event WebAudio.audioNodeWillBeDestroyed is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addAudioNodeWillBeDestroyedListener(callable $listener): SubscriptionInterface;


	/**
	 * Notifies that an existing AudioNode has been destroyed.
	 *
	 * Method will block until first WebAudio.audioNodeWillBeDestroyed event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return AudioNodeWillBeDestroyedEvent
	 */
	public function awaitAudioNodeWillBeDestroyed(ContextInterface $ctx): AudioNodeWillBeDestroyedEvent;


	/**
	 * Notifies that a new AudioParam has been created.
	 *
	 * Listener will be called whenever event WebAudio.audioParamCreated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addAudioParamCreatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Notifies that a new AudioParam has been created.
	 *
	 * Method will block until first WebAudio.audioParamCreated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return AudioParamCreatedEvent
	 */
	public function awaitAudioParamCreated(ContextInterface $ctx): AudioParamCreatedEvent;


	/**
	 * Notifies that an existing AudioParam has been destroyed.
	 *
	 * Listener will be called whenever event WebAudio.audioParamWillBeDestroyed is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addAudioParamWillBeDestroyedListener(callable $listener): SubscriptionInterface;


	/**
	 * Notifies that an existing AudioParam has been destroyed.
	 *
	 * Method will block until first WebAudio.audioParamWillBeDestroyed event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return AudioParamWillBeDestroyedEvent
	 */
	public function awaitAudioParamWillBeDestroyed(ContextInterface $ctx): AudioParamWillBeDestroyedEvent;


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


	/**
	 * Notifies that an AudioNode is connected to an AudioParam.
	 *
	 * Listener will be called whenever event WebAudio.nodeParamConnected is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addNodeParamConnectedListener(callable $listener): SubscriptionInterface;


	/**
	 * Notifies that an AudioNode is connected to an AudioParam.
	 *
	 * Method will block until first WebAudio.nodeParamConnected event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return NodeParamConnectedEvent
	 */
	public function awaitNodeParamConnected(ContextInterface $ctx): NodeParamConnectedEvent;


	/**
	 * Notifies that an AudioNode is disconnected to an AudioParam.
	 *
	 * Listener will be called whenever event WebAudio.nodeParamDisconnected is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addNodeParamDisconnectedListener(callable $listener): SubscriptionInterface;


	/**
	 * Notifies that an AudioNode is disconnected to an AudioParam.
	 *
	 * Method will block until first WebAudio.nodeParamDisconnected event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return NodeParamDisconnectedEvent
	 */
	public function awaitNodeParamDisconnected(ContextInterface $ctx): NodeParamDisconnectedEvent;


	/**
	 * Notifies that two AudioNodes are connected.
	 *
	 * Listener will be called whenever event WebAudio.nodesConnected is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addNodesConnectedListener(callable $listener): SubscriptionInterface;


	/**
	 * Notifies that two AudioNodes are connected.
	 *
	 * Method will block until first WebAudio.nodesConnected event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return NodesConnectedEvent
	 */
	public function awaitNodesConnected(ContextInterface $ctx): NodesConnectedEvent;


	/**
	 * Notifies that AudioNodes are disconnected. The destination can be null, and it means all the outgoing connections from the source are disconnected.
	 *
	 * Listener will be called whenever event WebAudio.nodesDisconnected is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addNodesDisconnectedListener(callable $listener): SubscriptionInterface;


	/**
	 * Notifies that AudioNodes are disconnected. The destination can be null, and it means all the outgoing connections from the source are disconnected.
	 *
	 * Method will block until first WebAudio.nodesDisconnected event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return NodesDisconnectedEvent
	 */
	public function awaitNodesDisconnected(ContextInterface $ctx): NodesDisconnectedEvent;
}
