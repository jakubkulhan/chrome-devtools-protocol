<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Database\AddDatabaseEvent;
use ChromeDevtoolsProtocol\Model\Database\ExecuteSQLRequest;
use ChromeDevtoolsProtocol\Model\Database\ExecuteSQLResponse;
use ChromeDevtoolsProtocol\Model\Database\GetDatabaseTableNamesRequest;
use ChromeDevtoolsProtocol\Model\Database\GetDatabaseTableNamesResponse;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class DatabaseDomain implements DatabaseDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Database.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Database.enable', $request);
	}


	public function executeSQL(ContextInterface $ctx, ExecuteSQLRequest $request): ExecuteSQLResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Database.executeSQL', $request);
		return ExecuteSQLResponse::fromJson($response);
	}


	public function getDatabaseTableNames(ContextInterface $ctx, GetDatabaseTableNamesRequest $request): GetDatabaseTableNamesResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Database.getDatabaseTableNames', $request);
		return GetDatabaseTableNamesResponse::fromJson($response);
	}


	public function addAddDatabaseListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Database.addDatabase', function ($event) use ($listener) {
			return $listener(AddDatabaseEvent::fromJson($event));
		});
	}


	public function awaitAddDatabase(ContextInterface $ctx): AddDatabaseEvent
	{
		return AddDatabaseEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Database.addDatabase'));
	}
}
