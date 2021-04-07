<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Input\DispatchDragEventRequest;
use ChromeDevtoolsProtocol\Model\Input\DispatchKeyEventRequest;
use ChromeDevtoolsProtocol\Model\Input\DispatchMouseEventRequest;
use ChromeDevtoolsProtocol\Model\Input\DispatchTouchEventRequest;
use ChromeDevtoolsProtocol\Model\Input\EmulateTouchFromMouseEventRequest;
use ChromeDevtoolsProtocol\Model\Input\InsertTextRequest;
use ChromeDevtoolsProtocol\Model\Input\SetIgnoreInputEventsRequest;
use ChromeDevtoolsProtocol\Model\Input\SynthesizePinchGestureRequest;
use ChromeDevtoolsProtocol\Model\Input\SynthesizeScrollGestureRequest;
use ChromeDevtoolsProtocol\Model\Input\SynthesizeTapGestureRequest;

class InputDomain implements InputDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function dispatchDragEvent(ContextInterface $ctx, DispatchDragEventRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Input.dispatchDragEvent', $request);
	}


	public function dispatchKeyEvent(ContextInterface $ctx, DispatchKeyEventRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Input.dispatchKeyEvent', $request);
	}


	public function dispatchMouseEvent(ContextInterface $ctx, DispatchMouseEventRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Input.dispatchMouseEvent', $request);
	}


	public function dispatchTouchEvent(ContextInterface $ctx, DispatchTouchEventRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Input.dispatchTouchEvent', $request);
	}


	public function emulateTouchFromMouseEvent(ContextInterface $ctx, EmulateTouchFromMouseEventRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Input.emulateTouchFromMouseEvent', $request);
	}


	public function insertText(ContextInterface $ctx, InsertTextRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Input.insertText', $request);
	}


	public function setIgnoreInputEvents(ContextInterface $ctx, SetIgnoreInputEventsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Input.setIgnoreInputEvents', $request);
	}


	public function synthesizePinchGesture(ContextInterface $ctx, SynthesizePinchGestureRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Input.synthesizePinchGesture', $request);
	}


	public function synthesizeScrollGesture(ContextInterface $ctx, SynthesizeScrollGestureRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Input.synthesizeScrollGesture', $request);
	}


	public function synthesizeTapGesture(ContextInterface $ctx, SynthesizeTapGestureRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Input.synthesizeTapGesture', $request);
	}
}
