<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\FindInPage\FindFirstRequest;

/**
 * This domain provides commands to trigger the "Find in page" feature.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface FindInPageDomainInterface
{
	/**
	 * Forwards `query` to the find-in-page facility, starting a new find session. Where exactly the search starts from is implementation-specific.
	 *
	 * @param ContextInterface $ctx
	 * @param FindFirstRequest $request
	 *
	 * @return void
	 */
	public function findFirst(ContextInterface $ctx, FindFirstRequest $request): void;


	/**
	 * Moves to the next match for the query passed to the most recent findFirst() call.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function findNext(ContextInterface $ctx): void;


	/**
	 * Moves to the previous match for the query passed to the most recent findFirst() call.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function findPrev(ContextInterface $ctx): void;


	/**
	 * Ends the current find session, if any, and clears its highlighting.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function stop(ContextInterface $ctx): void;
}
