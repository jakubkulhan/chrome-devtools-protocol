<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Security\CertificateErrorEvent;
use ChromeDevtoolsProtocol\Model\Security\HandleCertificateErrorRequest;
use ChromeDevtoolsProtocol\Model\Security\SecurityStateChangedEvent;
use ChromeDevtoolsProtocol\Model\Security\SetIgnoreCertificateErrorsRequest;
use ChromeDevtoolsProtocol\Model\Security\SetOverrideCertificateErrorsRequest;
use ChromeDevtoolsProtocol\Model\Security\VisibleSecurityStateChangedEvent;
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
	 * Enable/disable whether all certificate errors should be ignored.
	 *
	 * @param ContextInterface $ctx
	 * @param SetIgnoreCertificateErrorsRequest $request
	 *
	 * @return void
	 */
	public function setIgnoreCertificateErrors(ContextInterface $ctx, SetIgnoreCertificateErrorsRequest $request): void;


	/**
	 * Enable/disable overriding certificate errors. If enabled, all certificate error events need to be handled by the DevTools client and should be answered with `handleCertificateError` commands.
	 *
	 * @param ContextInterface $ctx
	 * @param SetOverrideCertificateErrorsRequest $request
	 *
	 * @return void
	 */
	public function setOverrideCertificateErrors(ContextInterface $ctx, SetOverrideCertificateErrorsRequest $request): void;


	/**
	 * There is a certificate error. If overriding certificate errors is enabled, then it should be handled with the `handleCertificateError` command. Note: this event does not fire if the certificate error has been allowed internally. Only one client per target should override certificate errors at the same time.
	 *
	 * Listener will be called whenever event Security.certificateError is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addCertificateErrorListener(callable $listener): SubscriptionInterface;


	/**
	 * There is a certificate error. If overriding certificate errors is enabled, then it should be handled with the `handleCertificateError` command. Note: this event does not fire if the certificate error has been allowed internally. Only one client per target should override certificate errors at the same time.
	 *
	 * Method will block until first Security.certificateError event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return CertificateErrorEvent
	 */
	public function awaitCertificateError(ContextInterface $ctx): CertificateErrorEvent;


	/**
	 * The security state of the page changed. No longer being sent.
	 *
	 * Listener will be called whenever event Security.securityStateChanged is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addSecurityStateChangedListener(callable $listener): SubscriptionInterface;


	/**
	 * The security state of the page changed. No longer being sent.
	 *
	 * Method will block until first Security.securityStateChanged event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return SecurityStateChangedEvent
	 */
	public function awaitSecurityStateChanged(ContextInterface $ctx): SecurityStateChangedEvent;


	/**
	 * The security state of the page changed.
	 *
	 * Listener will be called whenever event Security.visibleSecurityStateChanged is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addVisibleSecurityStateChangedListener(callable $listener): SubscriptionInterface;


	/**
	 * The security state of the page changed.
	 *
	 * Method will block until first Security.visibleSecurityStateChanged event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return VisibleSecurityStateChangedEvent
	 */
	public function awaitVisibleSecurityStateChanged(ContextInterface $ctx): VisibleSecurityStateChangedEvent;
}
