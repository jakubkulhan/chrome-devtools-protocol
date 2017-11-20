<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Console\MessageAddedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * This domain is deprecated - use Runtime or Log instead.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface ConsoleDomainInterface
{
	/**
	 * Enables console domain, sends the messages collected so far to the client by means of the <code>messageAdded</code> notification.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Disables console domain, prevents further console messages from being reported to the client.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Does nothing.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function clearMessages(ContextInterface $ctx): void;


	/**
	 * Issued when new console message is added.
	 *
	 * Listener will be called whenever event Console.messageAdded is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addMessageAddedListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when new console message is added.
	 *
	 * Method will block until first Console.messageAdded event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return MessageAddedEvent
	 */
	public function awaitMessageAdded(ContextInterface $ctx): MessageAddedEvent;
}
