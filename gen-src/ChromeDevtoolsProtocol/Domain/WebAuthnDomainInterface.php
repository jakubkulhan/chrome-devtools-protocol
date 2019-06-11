<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\WebAuthn\AddCredentialRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\AddVirtualAuthenticatorRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\AddVirtualAuthenticatorResponse;
use ChromeDevtoolsProtocol\Model\WebAuthn\ClearCredentialsRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\GetCredentialsRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\GetCredentialsResponse;
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
	 * Adds the credential to the specified authenticator.
	 *
	 * @param ContextInterface $ctx
	 * @param AddCredentialRequest $request
	 *
	 * @return void
	 */
	public function addCredential(ContextInterface $ctx, AddCredentialRequest $request): void;


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
	 * Clears all the credentials from the specified device.
	 *
	 * @param ContextInterface $ctx
	 * @param ClearCredentialsRequest $request
	 *
	 * @return void
	 */
	public function clearCredentials(ContextInterface $ctx, ClearCredentialsRequest $request): void;


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
	 * Returns all the credentials stored in the given virtual authenticator.
	 *
	 * @param ContextInterface $ctx
	 * @param GetCredentialsRequest $request
	 *
	 * @return GetCredentialsResponse
	 */
	public function getCredentials(ContextInterface $ctx, GetCredentialsRequest $request): GetCredentialsResponse;


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
