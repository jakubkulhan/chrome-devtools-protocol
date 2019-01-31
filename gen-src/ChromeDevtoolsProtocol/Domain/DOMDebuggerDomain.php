<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\DOMDebugger\GetEventListenersRequest;
use ChromeDevtoolsProtocol\Model\DOMDebugger\GetEventListenersResponse;
use ChromeDevtoolsProtocol\Model\DOMDebugger\RemoveDOMBreakpointRequest;
use ChromeDevtoolsProtocol\Model\DOMDebugger\RemoveEventListenerBreakpointRequest;
use ChromeDevtoolsProtocol\Model\DOMDebugger\RemoveInstrumentationBreakpointRequest;
use ChromeDevtoolsProtocol\Model\DOMDebugger\RemoveXHRBreakpointRequest;
use ChromeDevtoolsProtocol\Model\DOMDebugger\SetDOMBreakpointRequest;
use ChromeDevtoolsProtocol\Model\DOMDebugger\SetEventListenerBreakpointRequest;
use ChromeDevtoolsProtocol\Model\DOMDebugger\SetInstrumentationBreakpointRequest;
use ChromeDevtoolsProtocol\Model\DOMDebugger\SetXHRBreakpointRequest;

class DOMDebuggerDomain implements DOMDebuggerDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function getEventListeners(ContextInterface $ctx, GetEventListenersRequest $request): GetEventListenersResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'DOMDebugger.getEventListeners', $request);
		return GetEventListenersResponse::fromJson($response);
	}


	public function removeDOMBreakpoint(ContextInterface $ctx, RemoveDOMBreakpointRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOMDebugger.removeDOMBreakpoint', $request);
	}


	public function removeEventListenerBreakpoint(ContextInterface $ctx, RemoveEventListenerBreakpointRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOMDebugger.removeEventListenerBreakpoint', $request);
	}


	public function removeInstrumentationBreakpoint(ContextInterface $ctx, RemoveInstrumentationBreakpointRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOMDebugger.removeInstrumentationBreakpoint', $request);
	}


	public function removeXHRBreakpoint(ContextInterface $ctx, RemoveXHRBreakpointRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOMDebugger.removeXHRBreakpoint', $request);
	}


	public function setDOMBreakpoint(ContextInterface $ctx, SetDOMBreakpointRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOMDebugger.setDOMBreakpoint', $request);
	}


	public function setEventListenerBreakpoint(ContextInterface $ctx, SetEventListenerBreakpointRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOMDebugger.setEventListenerBreakpoint', $request);
	}


	public function setInstrumentationBreakpoint(ContextInterface $ctx, SetInstrumentationBreakpointRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOMDebugger.setInstrumentationBreakpoint', $request);
	}


	public function setXHRBreakpoint(ContextInterface $ctx, SetXHRBreakpointRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DOMDebugger.setXHRBreakpoint', $request);
	}
}
