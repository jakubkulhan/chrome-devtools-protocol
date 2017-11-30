<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Inspector\DetachedEvent;
use ChromeDevtoolsProtocol\Model\Inspector\TargetCrashedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * Inspector domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface InspectorDomainInterface
{
	/**
	 * Disables inspector domain notifications.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables inspector domain notifications.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Fired when remote debugging connection is about to be terminated. Contains detach reason.
	 *
	 * Listener will be called whenever event Inspector.detached is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDetachedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when remote debugging connection is about to be terminated. Contains detach reason.
	 *
	 * Method will block until first Inspector.detached event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DetachedEvent
	 */
	public function awaitDetached(ContextInterface $ctx): DetachedEvent;


	/**
	 * Fired when debugging target has crashed
	 *
	 * Listener will be called whenever event Inspector.targetCrashed is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addTargetCrashedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when debugging target has crashed
	 *
	 * Method will block until first Inspector.targetCrashed event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return TargetCrashedEvent
	 */
	public function awaitTargetCrashed(ContextInterface $ctx): TargetCrashedEvent;
}
