<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Database\AddDatabaseEvent;
use ChromeDevtoolsProtocol\Model\Database\ExecuteSQLRequest;
use ChromeDevtoolsProtocol\Model\Database\ExecuteSQLResponse;
use ChromeDevtoolsProtocol\Model\Database\GetDatabaseTableNamesRequest;
use ChromeDevtoolsProtocol\Model\Database\GetDatabaseTableNamesResponse;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * Database domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface DatabaseDomainInterface
{
	/**
	 * Enables database tracking, database events will now be delivered to the client.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Disables database tracking, prevents database events from being sent to the client.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Call Database.getDatabaseTableNames command.
	 *
	 * @param ContextInterface $ctx
	 * @param GetDatabaseTableNamesRequest $request
	 *
	 * @return GetDatabaseTableNamesResponse
	 */
	public function getDatabaseTableNames(ContextInterface $ctx, GetDatabaseTableNamesRequest $request): GetDatabaseTableNamesResponse;


	/**
	 * Call Database.executeSQL command.
	 *
	 * @param ContextInterface $ctx
	 * @param ExecuteSQLRequest $request
	 *
	 * @return ExecuteSQLResponse
	 */
	public function executeSQL(ContextInterface $ctx, ExecuteSQLRequest $request): ExecuteSQLResponse;


	/**
	 * Subscribe to Database.addDatabase event.
	 *
	 * Listener will be called whenever event Database.addDatabase is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addAddDatabaseListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for Database.addDatabase event.
	 *
	 * Method will block until first Database.addDatabase event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return AddDatabaseEvent
	 */
	public function awaitAddDatabase(ContextInterface $ctx): AddDatabaseEvent;
}
