<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\DigitalCredentials\SetVirtualWalletBehaviorRequest;

/**
 * This domain allows interacting with the Digital Credentials API for automation.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface DigitalCredentialsDomainInterface
{
	/**
	 * Sets the behavior of the virtual wallet for digital credential requests issued from this frame.
	 *
	 * @param ContextInterface $ctx
	 * @param SetVirtualWalletBehaviorRequest $request
	 *
	 * @return void
	 */
	public function setVirtualWalletBehavior(ContextInterface $ctx, SetVirtualWalletBehaviorRequest $request): void;
}
