<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
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
