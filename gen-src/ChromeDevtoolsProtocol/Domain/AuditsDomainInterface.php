<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Audits\CheckContrastRequest;
use ChromeDevtoolsProtocol\Model\Audits\GetEncodedResponseRequest;
use ChromeDevtoolsProtocol\Model\Audits\GetEncodedResponseResponse;
use ChromeDevtoolsProtocol\Model\Audits\IssueAddedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * Audits domain allows investigation of page violations and possible improvements.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface AuditsDomainInterface
{
	/**
	 * Runs the contrast check for the target page. Found issues are reported using Audits.issueAdded event.
	 *
	 * @param ContextInterface $ctx
	 * @param CheckContrastRequest $request
	 *
	 * @return void
	 */
	public function checkContrast(ContextInterface $ctx, CheckContrastRequest $request): void;


	/**
	 * Disables issues domain, prevents further issues from being reported to the client.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enables issues domain, sends the issues collected so far to the client by means of the `issueAdded` event.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Returns the response body and size if it were re-encoded with the specified settings. Only applies to images.
	 *
	 * @param ContextInterface $ctx
	 * @param GetEncodedResponseRequest $request
	 *
	 * @return GetEncodedResponseResponse
	 */
	public function getEncodedResponse(
		ContextInterface $ctx,
		GetEncodedResponseRequest $request
	): GetEncodedResponseResponse;


	/**
	 * Subscribe to Audits.issueAdded event.
	 *
	 * Listener will be called whenever event Audits.issueAdded is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addIssueAddedListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for Audits.issueAdded event.
	 *
	 * Method will block until first Audits.issueAdded event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return IssueAddedEvent
	 */
	public function awaitIssueAdded(ContextInterface $ctx): IssueAddedEvent;
}
