<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\DOMDebugger\GetEventListenersRequest;
use ChromeDevtoolsProtocol\Model\DOMDebugger\GetEventListenersResponse;
use ChromeDevtoolsProtocol\Model\DOMDebugger\RemoveDOMBreakpointRequest;
use ChromeDevtoolsProtocol\Model\DOMDebugger\RemoveEventListenerBreakpointRequest;
use ChromeDevtoolsProtocol\Model\DOMDebugger\RemoveInstrumentationBreakpointRequest;
use ChromeDevtoolsProtocol\Model\DOMDebugger\RemoveXHRBreakpointRequest;
use ChromeDevtoolsProtocol\Model\DOMDebugger\SetBreakOnCSPViolationRequest;
use ChromeDevtoolsProtocol\Model\DOMDebugger\SetDOMBreakpointRequest;
use ChromeDevtoolsProtocol\Model\DOMDebugger\SetEventListenerBreakpointRequest;
use ChromeDevtoolsProtocol\Model\DOMDebugger\SetInstrumentationBreakpointRequest;
use ChromeDevtoolsProtocol\Model\DOMDebugger\SetXHRBreakpointRequest;

/**
 * DOM debugging allows setting breakpoints on particular DOM operations and events. JavaScript execution will stop on these operations as if there was a regular breakpoint set.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface DOMDebuggerDomainInterface
{
	/**
	 * Returns event listeners of the given object.
	 *
	 * @param ContextInterface $ctx
	 * @param GetEventListenersRequest $request
	 *
	 * @return GetEventListenersResponse
	 */
	public function getEventListeners(ContextInterface $ctx, GetEventListenersRequest $request): GetEventListenersResponse;


	/**
	 * Removes DOM breakpoint that was set using `setDOMBreakpoint`.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveDOMBreakpointRequest $request
	 *
	 * @return void
	 */
	public function removeDOMBreakpoint(ContextInterface $ctx, RemoveDOMBreakpointRequest $request): void;


	/**
	 * Removes breakpoint on particular DOM event.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveEventListenerBreakpointRequest $request
	 *
	 * @return void
	 */
	public function removeEventListenerBreakpoint(ContextInterface $ctx, RemoveEventListenerBreakpointRequest $request): void;


	/**
	 * Removes breakpoint on particular native event.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveInstrumentationBreakpointRequest $request
	 *
	 * @return void
	 */
	public function removeInstrumentationBreakpoint(ContextInterface $ctx, RemoveInstrumentationBreakpointRequest $request): void;


	/**
	 * Removes breakpoint from XMLHttpRequest.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveXHRBreakpointRequest $request
	 *
	 * @return void
	 */
	public function removeXHRBreakpoint(ContextInterface $ctx, RemoveXHRBreakpointRequest $request): void;


	/**
	 * Sets breakpoint on particular CSP violations.
	 *
	 * @param ContextInterface $ctx
	 * @param SetBreakOnCSPViolationRequest $request
	 *
	 * @return void
	 */
	public function setBreakOnCSPViolation(ContextInterface $ctx, SetBreakOnCSPViolationRequest $request): void;


	/**
	 * Sets breakpoint on particular operation with DOM.
	 *
	 * @param ContextInterface $ctx
	 * @param SetDOMBreakpointRequest $request
	 *
	 * @return void
	 */
	public function setDOMBreakpoint(ContextInterface $ctx, SetDOMBreakpointRequest $request): void;


	/**
	 * Sets breakpoint on particular DOM event.
	 *
	 * @param ContextInterface $ctx
	 * @param SetEventListenerBreakpointRequest $request
	 *
	 * @return void
	 */
	public function setEventListenerBreakpoint(ContextInterface $ctx, SetEventListenerBreakpointRequest $request): void;


	/**
	 * Sets breakpoint on particular native event.
	 *
	 * @param ContextInterface $ctx
	 * @param SetInstrumentationBreakpointRequest $request
	 *
	 * @return void
	 */
	public function setInstrumentationBreakpoint(ContextInterface $ctx, SetInstrumentationBreakpointRequest $request): void;


	/**
	 * Sets breakpoint on XMLHttpRequest.
	 *
	 * @param ContextInterface $ctx
	 * @param SetXHRBreakpointRequest $request
	 *
	 * @return void
	 */
	public function setXHRBreakpoint(ContextInterface $ctx, SetXHRBreakpointRequest $request): void;
}
