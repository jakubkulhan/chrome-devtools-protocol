<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Autofill\AddressFormFilledEvent;
use ChromeDevtoolsProtocol\Model\Autofill\SetAddressesRequest;
use ChromeDevtoolsProtocol\Model\Autofill\TriggerRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

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


	public function addAddressFormFilledListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Autofill.addressFormFilled', function ($event) use ($listener) {
			return $listener(AddressFormFilledEvent::fromJson($event));
		});
	}


	public function awaitAddressFormFilled(ContextInterface $ctx): AddressFormFilledEvent
	{
		return AddressFormFilledEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Autofill.addressFormFilled'));
	}
}
