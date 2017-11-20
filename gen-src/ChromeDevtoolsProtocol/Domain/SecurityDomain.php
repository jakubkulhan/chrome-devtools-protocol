<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Security\CertificateErrorEvent;
use ChromeDevtoolsProtocol\Model\Security\HandleCertificateErrorRequest;
use ChromeDevtoolsProtocol\Model\Security\SecurityStateChangedEvent;
use ChromeDevtoolsProtocol\Model\Security\SetOverrideCertificateErrorsRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class SecurityDomain implements SecurityDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Security.enable', $request);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Security.disable', $request);
	}


	public function handleCertificateError(ContextInterface $ctx, HandleCertificateErrorRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Security.handleCertificateError', $request);
	}


	public function setOverrideCertificateErrors(ContextInterface $ctx, SetOverrideCertificateErrorsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Security.setOverrideCertificateErrors', $request);
	}


	public function addSecurityStateChangedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Security.securityStateChanged', $listener);
	}


	public function awaitSecurityStateChanged(ContextInterface $ctx): SecurityStateChangedEvent
	{
		return SecurityStateChangedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Security.securityStateChanged'));
	}


	public function addCertificateErrorListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Security.certificateError', $listener);
	}


	public function awaitCertificateError(ContextInterface $ctx): CertificateErrorEvent
	{
		return CertificateErrorEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Security.certificateError'));
	}
}
