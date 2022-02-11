<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\EventBreakpoints\RemoveInstrumentationBreakpointRequest;
use ChromeDevtoolsProtocol\Model\EventBreakpoints\SetInstrumentationBreakpointRequest;

/**
 * EventBreakpoints permits setting breakpoints on particular operations and events in targets that run JavaScript but do not have a DOM. JavaScript execution will stop on these operations as if there was a regular breakpoint set.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface EventBreakpointsDomainInterface
{
	/**
	 * Removes breakpoint on particular native event.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveInstrumentationBreakpointRequest $request
	 *
	 * @return void
	 */
	public function removeInstrumentationBreakpoint(
		ContextInterface $ctx,
		RemoveInstrumentationBreakpointRequest $request
	): void;


	/**
	 * Sets breakpoint on particular native event.
	 *
	 * @param ContextInterface $ctx
	 * @param SetInstrumentationBreakpointRequest $request
	 *
	 * @return void
	 */
	public function setInstrumentationBreakpoint(ContextInterface $ctx, SetInstrumentationBreakpointRequest $request): void;
}
