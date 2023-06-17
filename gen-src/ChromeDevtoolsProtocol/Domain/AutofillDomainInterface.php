<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Autofill\SetAddressesRequest;
use ChromeDevtoolsProtocol\Model\Autofill\TriggerRequest;

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
}
