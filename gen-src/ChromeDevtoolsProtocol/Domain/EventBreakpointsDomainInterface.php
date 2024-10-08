<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\EventBreakpoints\RemoveInstrumentationBreakpointRequest;
use ChromeDevtoolsProtocol\Model\EventBreakpoints\SetInstrumentationBreakpointRequest;

/**
 * EventBreakpoints permits setting JavaScript breakpoints on operations and events occurring in native code invoked from JavaScript. Once breakpoint is hit, it is reported through Debugger domain, similarly to regular breakpoints being hit.
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
	 * Removes all breakpoints
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


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
