<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Security\CertificateErrorEvent;
use ChromeDevtoolsProtocol\Model\Security\HandleCertificateErrorRequest;
use ChromeDevtoolsProtocol\Model\Security\SecurityStateChangedEvent;
use ChromeDevtoolsProtocol\Model\Security\SetOverrideCertificateErrorsRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * Security
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface SecurityDomainInterface
{
	/**
	 * Disables tracking security state changes.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables tracking security state changes.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Handles a certificate error that fired a certificateError event.
	 *
	 * @param ContextInterface $ctx
	 * @param HandleCertificateErrorRequest $request
	 *
	 * @return void
	 */
	public function handleCertificateError(ContextInterface $ctx, HandleCertificateErrorRequest $request): void;


	/**
	 * Enable/disable overriding certificate errors. If enabled, all certificate error events need to be handled by the DevTools client and should be answered with handleCertificateError commands.
	 *
	 * @param ContextInterface $ctx
	 * @param SetOverrideCertificateErrorsRequest $request
	 *
	 * @return void
	 */
	public function setOverrideCertificateErrors(ContextInterface $ctx, SetOverrideCertificateErrorsRequest $request): void;


	/**
	 * There is a certificate error. If overriding certificate errors is enabled, then it should be handled with the handleCertificateError command. Note: this event does not fire if the certificate error has been allowed internally.
	 *
	 * Listener will be called whenever event Security.certificateError is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addCertificateErrorListener(callable $listener): SubscriptionInterface;


	/**
	 * There is a certificate error. If overriding certificate errors is enabled, then it should be handled with the handleCertificateError command. Note: this event does not fire if the certificate error has been allowed internally.
	 *
	 * Method will block until first Security.certificateError event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return CertificateErrorEvent
	 */
	public function awaitCertificateError(ContextInterface $ctx): CertificateErrorEvent;


	/**
	 * The security state of the page changed.
	 *
	 * Listener will be called whenever event Security.securityStateChanged is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addSecurityStateChangedListener(callable $listener): SubscriptionInterface;


	/**
	 * The security state of the page changed.
	 *
	 * Method will block until first Security.securityStateChanged event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return SecurityStateChangedEvent
	 */
	public function awaitSecurityStateChanged(ContextInterface $ctx): SecurityStateChangedEvent;
}
