<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Preload\PrefetchStatusUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Preload\PreloadingAttemptSourcesUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Preload\PrerenderAttemptCompletedEvent;
use ChromeDevtoolsProtocol\Model\Preload\PrerenderStatusUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Preload\RuleSetRemovedEvent;
use ChromeDevtoolsProtocol\Model\Preload\RuleSetUpdatedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * Preload domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface PreloadDomainInterface
{
	/**
	 * Call Preload.disable command.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Call Preload.enable command.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Fired when a prefetch attempt is updated.
	 *
	 * Listener will be called whenever event Preload.prefetchStatusUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addPrefetchStatusUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when a prefetch attempt is updated.
	 *
	 * Method will block until first Preload.prefetchStatusUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return PrefetchStatusUpdatedEvent
	 */
	public function awaitPrefetchStatusUpdated(ContextInterface $ctx): PrefetchStatusUpdatedEvent;


	/**
	 * Send a list of sources for all preloading attempts.
	 *
	 * Listener will be called whenever event Preload.preloadingAttemptSourcesUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addPreloadingAttemptSourcesUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Send a list of sources for all preloading attempts.
	 *
	 * Method will block until first Preload.preloadingAttemptSourcesUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return PreloadingAttemptSourcesUpdatedEvent
	 */
	public function awaitPreloadingAttemptSourcesUpdated(ContextInterface $ctx): PreloadingAttemptSourcesUpdatedEvent;


	/**
	 * Fired when a prerender attempt is completed.
	 *
	 * Listener will be called whenever event Preload.prerenderAttemptCompleted is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addPrerenderAttemptCompletedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when a prerender attempt is completed.
	 *
	 * Method will block until first Preload.prerenderAttemptCompleted event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return PrerenderAttemptCompletedEvent
	 */
	public function awaitPrerenderAttemptCompleted(ContextInterface $ctx): PrerenderAttemptCompletedEvent;


	/**
	 * Fired when a prerender attempt is updated.
	 *
	 * Listener will be called whenever event Preload.prerenderStatusUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addPrerenderStatusUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when a prerender attempt is updated.
	 *
	 * Method will block until first Preload.prerenderStatusUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return PrerenderStatusUpdatedEvent
	 */
	public function awaitPrerenderStatusUpdated(ContextInterface $ctx): PrerenderStatusUpdatedEvent;


	/**
	 * Subscribe to Preload.ruleSetRemoved event.
	 *
	 * Listener will be called whenever event Preload.ruleSetRemoved is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addRuleSetRemovedListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for Preload.ruleSetRemoved event.
	 *
	 * Method will block until first Preload.ruleSetRemoved event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return RuleSetRemovedEvent
	 */
	public function awaitRuleSetRemoved(ContextInterface $ctx): RuleSetRemovedEvent;


	/**
	 * Upsert. Currently, it is only emitted when a rule set added.
	 *
	 * Listener will be called whenever event Preload.ruleSetUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addRuleSetUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Upsert. Currently, it is only emitted when a rule set added.
	 *
	 * Method will block until first Preload.ruleSetUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return RuleSetUpdatedEvent
	 */
	public function awaitRuleSetUpdated(ContextInterface $ctx): RuleSetUpdatedEvent;
}
