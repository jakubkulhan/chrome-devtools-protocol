<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\WebAuthn\AddCredentialRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\AddVirtualAuthenticatorRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\AddVirtualAuthenticatorResponse;
use ChromeDevtoolsProtocol\Model\WebAuthn\ClearCredentialsRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\GetCredentialsRequest;
use ChromeDevtoolsProtocol\Model\WebAuthn\GetCredentialsResponse;
use ChromeDevtoolsProtocol\Model\WebAuthn\RemoveVirtualAuthenticatorRequest;

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


	public function addVirtualAuthenticator(ContextInterface $ctx, AddVirtualAuthenticatorRequest $request): AddVirtualAuthenticatorResponse
	{
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


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'WebAuthn.enable', $request);
	}


	public function getCredentials(ContextInterface $ctx, GetCredentialsRequest $request): GetCredentialsResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'WebAuthn.getCredentials', $request);
		return GetCredentialsResponse::fromJson($response);
	}


	public function removeVirtualAuthenticator(ContextInterface $ctx, RemoveVirtualAuthenticatorRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'WebAuthn.removeVirtualAuthenticator', $request);
	}
}
