<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Autofill\AddressFormFilledEvent;
use ChromeDevtoolsProtocol\Model\Autofill\SetAddressesRequest;
use ChromeDevtoolsProtocol\Model\Autofill\TriggerRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * Defines commands and events for Autofill.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface AutofillDomainInterface
{
	/**
	 * Disables autofill domain notifications.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables autofill domain notifications.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Set addresses so that developers can verify their forms implementation.
	 *
	 * @param ContextInterface $ctx
	 * @param SetAddressesRequest $request
	 *
	 * @return void
	 */
	public function setAddresses(ContextInterface $ctx, SetAddressesRequest $request): void;


	/**
	 * Trigger autofill on a form identified by the fieldId. If the field and related form cannot be autofilled, returns an error.
	 *
	 * @param ContextInterface $ctx
	 * @param TriggerRequest $request
	 *
	 * @return void
	 */
	public function trigger(ContextInterface $ctx, TriggerRequest $request): void;


	/**
	 * Emitted when an address form is filled.
	 *
	 * Listener will be called whenever event Autofill.addressFormFilled is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addAddressFormFilledListener(callable $listener): SubscriptionInterface;


	/**
	 * Emitted when an address form is filled.
	 *
	 * Method will block until first Autofill.addressFormFilled event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return AddressFormFilledEvent
	 */
	public function awaitAddressFormFilled(ContextInterface $ctx): AddressFormFilledEvent;
}
