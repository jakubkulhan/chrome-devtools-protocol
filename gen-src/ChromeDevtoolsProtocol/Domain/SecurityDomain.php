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


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Security.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Security.enable', $request);
	}


	public function handleCertificateError(ContextInterface $ctx, HandleCertificateErrorRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Security.handleCertificateError', $request);
	}


	public function setOverrideCertificateErrors(ContextInterface $ctx, SetOverrideCertificateErrorsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Security.setOverrideCertificateErrors', $request);
	}


	public function addCertificateErrorListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Security.certificateError', function ($event) use ($listener) {
			return $listener(CertificateErrorEvent::fromJson($event));
		});
	}


	public function awaitCertificateError(ContextInterface $ctx): CertificateErrorEvent
	{
		return CertificateErrorEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Security.certificateError'));
	}


	public function addSecurityStateChangedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Security.securityStateChanged', function ($event) use ($listener) {
			return $listener(SecurityStateChangedEvent::fromJson($event));
		});
	}


	public function awaitSecurityStateChanged(ContextInterface $ctx): SecurityStateChangedEvent
	{
		return SecurityStateChangedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Security.securityStateChanged'));
	}
}
