<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\WebAuthn\AddCredentialRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\AddVirtualAuthenticatorRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\AddVirtualAuthenticatorResponse;
use ChromeDevtoolsProtocol\Model\WebAuthn\ClearCredentialsRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\CredentialAddedEvent;
use ChromeDevtoolsProtocol\Model\WebAuthn\CredentialAssertedEvent;
use ChromeDevtoolsProtocol\Model\WebAuthn\EnableRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\GetCredentialRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\GetCredentialResponse;
use ChromeDevtoolsProtocol\Model\WebAuthn\GetCredentialsRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\GetCredentialsResponse;
use ChromeDevtoolsProtocol\Model\WebAuthn\RemoveCredentialRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\RemoveVirtualAuthenticatorRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\SetAutomaticPresenceSimulationRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\SetResponseOverrideBitsRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\SetUserVerifiedRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

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
	public function addVirtualAuthenticator(
		ContextInterface $ctx,
		AddVirtualAuthenticatorRequest $request
	): AddVirtualAuthenticatorResponse;


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
	 * @param EnableRequest $request
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx, EnableRequest $request): void;


	/**
	 * Returns a single credential stored in the given virtual authenticator that matches the credential ID.
	 *
	 * @param ContextInterface $ctx
	 * @param GetCredentialRequest $request
	 *
	 * @return GetCredentialResponse
	 */
	public function getCredential(ContextInterface $ctx, GetCredentialRequest $request): GetCredentialResponse;


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
	 * Removes a credential from the authenticator.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveCredentialRequest $request
	 *
	 * @return void
	 */
	public function removeCredential(ContextInterface $ctx, RemoveCredentialRequest $request): void;


	/**
	 * Removes the given authenticator.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveVirtualAuthenticatorRequest $request
	 *
	 * @return void
	 */
	public function removeVirtualAuthenticator(ContextInterface $ctx, RemoveVirtualAuthenticatorRequest $request): void;


	/**
	 * Sets whether tests of user presence will succeed immediately (if true) or fail to resolve (if false) for an authenticator. The default is true.
	 *
	 * @param ContextInterface $ctx
	 * @param SetAutomaticPresenceSimulationRequest $request
	 *
	 * @return void
	 */
	public function setAutomaticPresenceSimulation(
		ContextInterface $ctx,
		SetAutomaticPresenceSimulationRequest $request
	): void;


	/**
	 * Resets parameters isBogusSignature, isBadUV, isBadUP to false if they are not present.
	 *
	 * @param ContextInterface $ctx
	 * @param SetResponseOverrideBitsRequest $request
	 *
	 * @return void
	 */
	public function setResponseOverrideBits(ContextInterface $ctx, SetResponseOverrideBitsRequest $request): void;


	/**
	 * Sets whether User Verification succeeds or fails for an authenticator. The default is true.
	 *
	 * @param ContextInterface $ctx
	 * @param SetUserVerifiedRequest $request
	 *
	 * @return void
	 */
	public function setUserVerified(ContextInterface $ctx, SetUserVerifiedRequest $request): void;


	/**
	 * Triggered when a credential is added to an authenticator.
	 *
	 * Listener will be called whenever event WebAuthn.credentialAdded is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addCredentialAddedListener(callable $listener): SubscriptionInterface;


	/**
	 * Triggered when a credential is added to an authenticator.
	 *
	 * Method will block until first WebAuthn.credentialAdded event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return CredentialAddedEvent
	 */
	public function awaitCredentialAdded(ContextInterface $ctx): CredentialAddedEvent;


	/**
	 * Triggered when a credential is used in a webauthn assertion.
	 *
	 * Listener will be called whenever event WebAuthn.credentialAsserted is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addCredentialAssertedListener(callable $listener): SubscriptionInterface;


	/**
	 * Triggered when a credential is used in a webauthn assertion.
	 *
	 * Method will block until first WebAuthn.credentialAsserted event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return CredentialAssertedEvent
	 */
	public function awaitCredentialAsserted(ContextInterface $ctx): CredentialAssertedEvent;
}
