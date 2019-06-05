<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\WebAuthn\AddVirtualAuthenticatorRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\AddVirtualAuthenticatorResponse;
use ChromeDevtoolsProtocol\Model\WebAuthn\RemoveVirtualAuthenticatorRequest;

/**
 * This domain allows configuring virtual authenticators to test the WebAuthn API.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface WebAuthnDomainInterface
{
	/**
	 * Creates and adds a virtual authenticator.
	 *
	 * @param ContextInterface $ctx
	 * @param AddVirtualAuthenticatorRequest $request
	 *
	 * @return AddVirtualAuthenticatorResponse
	 */
	public function addVirtualAuthenticator(ContextInterface $ctx, AddVirtualAuthenticatorRequest $request): AddVirtualAuthenticatorResponse;


	/**
	 * Disable the WebAuthn domain.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enable the WebAuthn domain and start intercepting credential storage and retrieval with a virtual authenticator.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Removes the given authenticator.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveVirtualAuthenticatorRequest $request
	 *
	 * @return void
	 */
	public function removeVirtualAuthenticator(ContextInterface $ctx, RemoveVirtualAuthenticatorRequest $request): void;
}
