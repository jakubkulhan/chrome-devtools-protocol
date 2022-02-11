<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\EventBreakpoints\RemoveInstrumentationBreakpointRequest;
use ChromeDevtoolsProtocol\Model\EventBreakpoints\SetInstrumentationBreakpointRequest;

class EventBreakpointsDomain implements EventBreakpointsDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function removeInstrumentationBreakpoint(
		ContextInterface $ctx,
		RemoveInstrumentationBreakpointRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'EventBreakpoints.removeInstrumentationBreakpoint', $request);
	}


	public function setInstrumentationBreakpoint(ContextInterface $ctx, SetInstrumentationBreakpointRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'EventBreakpoints.setInstrumentationBreakpoint', $request);
	}
}
