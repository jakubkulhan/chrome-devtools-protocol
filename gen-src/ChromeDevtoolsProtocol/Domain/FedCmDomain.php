<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\FedCm\DialogShownEvent;
use ChromeDevtoolsProtocol\Model\FedCm\DismissDialogRequest;
use ChromeDevtoolsProtocol\Model\FedCm\SelectAccountRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class FedCmDomain implements FedCmDomainInterface
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
		$this->internalClient->executeCommand($ctx, 'FedCm.disable', $request);
	}


	public function dismissDialog(ContextInterface $ctx, DismissDialogRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'FedCm.dismissDialog', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'FedCm.enable', $request);
	}


	public function selectAccount(ContextInterface $ctx, SelectAccountRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'FedCm.selectAccount', $request);
	}


	public function addDialogShownListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('FedCm.dialogShown', function ($event) use ($listener) {
			return $listener(DialogShownEvent::fromJson($event));
		});
	}


	public function awaitDialogShown(ContextInterface $ctx): DialogShownEvent
	{
		return DialogShownEvent::fromJson($this->internalClient->awaitEvent($ctx, 'FedCm.dialogShown'));
	}
}
