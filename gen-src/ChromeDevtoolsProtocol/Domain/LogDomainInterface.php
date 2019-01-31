<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Log\EntryAddedEvent;
use ChromeDevtoolsProtocol\Model\Log\StartViolationsReportRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * Provides access to log entries.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface LogDomainInterface
{
	/**
	 * Clears the log.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function clear(ContextInterface $ctx): void;


	/**
	 * Disables log domain, prevents further log entries from being reported to the client.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables log domain, sends the entries collected so far to the client by means of the `entryAdded` notification.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * start violation reporting.
	 *
	 * @param ContextInterface $ctx
	 * @param StartViolationsReportRequest $request
	 *
	 * @return void
	 */
	public function startViolationsReport(ContextInterface $ctx, StartViolationsReportRequest $request): void;


	/**
	 * Stop violation reporting.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function stopViolationsReport(ContextInterface $ctx): void;


	/**
	 * Issued when new message was logged.
	 *
	 * Listener will be called whenever event Log.entryAdded is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addEntryAddedListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when new message was logged.
	 *
	 * Method will block until first Log.entryAdded event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return EntryAddedEvent
	 */
	public function awaitEntryAdded(ContextInterface $ctx): EntryAddedEvent;
}
