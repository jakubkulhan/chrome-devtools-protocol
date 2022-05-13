<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\WebAuthn\AddCredentialRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\AddVirtualAuthenticatorRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\AddVirtualAuthenticatorResponse;
use ChromeDevtoolsProtocol\Model\WebAuthn\ClearCredentialsRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\EnableRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\GetCredentialRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\GetCredentialResponse;
use ChromeDevtoolsProtocol\Model\WebAuthn\GetCredentialsRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\GetCredentialsResponse;
use ChromeDevtoolsProtocol\Model\WebAuthn\RemoveCredentialRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\RemoveVirtualAuthenticatorRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\SetAutomaticPresenceSimulationRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\SetUserVerifiedRequest;

class WebAuthnDomain implements WebAuthnDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function addCredential(ContextInterface $ctx, AddCredentialRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'WebAuthn.addCredential', $request);
	}


	public function addVirtualAuthenticator(
		ContextInterface $ctx,
		AddVirtualAuthenticatorRequest $request
	): AddVirtualAuthenticatorResponse {
		$response = $this->internalClient->executeCommand($ctx, 'WebAuthn.addVirtualAuthenticator', $request);
		return AddVirtualAuthenticatorResponse::fromJson($response);
	}


	public function clearCredentials(ContextInterface $ctx, ClearCredentialsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'WebAuthn.clearCredentials', $request);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'WebAuthn.disable', $request);
	}


	public function enable(ContextInterface $ctx, EnableRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'WebAuthn.enable', $request);
	}


	public function getCredential(ContextInterface $ctx, GetCredentialRequest $request): GetCredentialResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'WebAuthn.getCredential', $request);
		return GetCredentialResponse::fromJson($response);
	}


	public function getCredentials(ContextInterface $ctx, GetCredentialsRequest $request): GetCredentialsResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'WebAuthn.getCredentials', $request);
		return GetCredentialsResponse::fromJson($response);
	}


	public function removeCredential(ContextInterface $ctx, RemoveCredentialRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'WebAuthn.removeCredential', $request);
	}


	public function removeVirtualAuthenticator(ContextInterface $ctx, RemoveVirtualAuthenticatorRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'WebAuthn.removeVirtualAuthenticator', $request);
	}


	public function setAutomaticPresenceSimulation(
		ContextInterface $ctx,
		SetAutomaticPresenceSimulationRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'WebAuthn.setAutomaticPresenceSimulation', $request);
	}


	public function setUserVerified(ContextInterface $ctx, SetUserVerifiedRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'WebAuthn.setUserVerified', $request);
	}
}
