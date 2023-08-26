<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Autofill\SetAddressesRequest;
use ChromeDevtoolsProtocol\Model\Autofill\TriggerRequest;

class AutofillDomain implements AutofillDomainInterface
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
		$this->internalClient->executeCommand($ctx, 'Autofill.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Autofill.enable', $request);
	}


	public function setAddresses(ContextInterface $ctx, SetAddressesRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Autofill.setAddresses', $request);
	}


	public function trigger(ContextInterface $ctx, TriggerRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Autofill.trigger', $request);
	}
}
