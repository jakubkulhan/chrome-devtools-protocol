<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Input\DispatchKeyEventRequest;
use ChromeDevtoolsProtocol\Model\Input\DispatchMouseEventRequest;
use ChromeDevtoolsProtocol\Model\Input\DispatchTouchEventRequest;
use ChromeDevtoolsProtocol\Model\Input\EmulateTouchFromMouseEventRequest;
use ChromeDevtoolsProtocol\Model\Input\InsertTextRequest;
use ChromeDevtoolsProtocol\Model\Input\SetIgnoreInputEventsRequest;
use ChromeDevtoolsProtocol\Model\Input\SynthesizePinchGestureRequest;
use ChromeDevtoolsProtocol\Model\Input\SynthesizeScrollGestureRequest;
use ChromeDevtoolsProtocol\Model\Input\SynthesizeTapGestureRequest;

/**
 * Input domain.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface InputDomainInterface
{
	/**
	 * Dispatches a key event to the page.
	 *
	 * @param ContextInterface $ctx
	 * @param DispatchKeyEventRequest $request
	 *
	 * @return void
	 */
	public function dispatchKeyEvent(ContextInterface $ctx, DispatchKeyEventRequest $request): void;


	/**
	 * Dispatches a mouse event to the page.
	 *
	 * @param ContextInterface $ctx
	 * @param DispatchMouseEventRequest $request
	 *
	 * @return void
	 */
	public function dispatchMouseEvent(ContextInterface $ctx, DispatchMouseEventRequest $request): void;


	/**
	 * Dispatches a touch event to the page.
	 *
	 * @param ContextInterface $ctx
	 * @param DispatchTouchEventRequest $request
	 *
	 * @return void
	 */
	public function dispatchTouchEvent(ContextInterface $ctx, DispatchTouchEventRequest $request): void;


	/**
	 * Emulates touch event from the mouse event parameters.
	 *
	 * @param ContextInterface $ctx
	 * @param EmulateTouchFromMouseEventRequest $request
	 *
	 * @return void
	 */
	public function emulateTouchFromMouseEvent(ContextInterface $ctx, EmulateTouchFromMouseEventRequest $request): void;


	/**
	 * This method emulates inserting text that doesn't come from a key press, for example an emoji keyboard or an IME.
	 *
	 * @param ContextInterface $ctx
	 * @param InsertTextRequest $request
	 *
	 * @return void
	 */
	public function insertText(ContextInterface $ctx, InsertTextRequest $request): void;


	/**
	 * Ignores input events (useful while auditing page).
	 *
	 * @param ContextInterface $ctx
	 * @param SetIgnoreInputEventsRequest $request
	 *
	 * @return void
	 */
	public function setIgnoreInputEvents(ContextInterface $ctx, SetIgnoreInputEventsRequest $request): void;


	/**
	 * Synthesizes a pinch gesture over a time period by issuing appropriate touch events.
	 *
	 * @param ContextInterface $ctx
	 * @param SynthesizePinchGestureRequest $request
	 *
	 * @return void
	 */
	public function synthesizePinchGesture(ContextInterface $ctx, SynthesizePinchGestureRequest $request): void;


	/**
	 * Synthesizes a scroll gesture over a time period by issuing appropriate touch events.
	 *
	 * @param ContextInterface $ctx
	 * @param SynthesizeScrollGestureRequest $request
	 *
	 * @return void
	 */
	public function synthesizeScrollGesture(ContextInterface $ctx, SynthesizeScrollGestureRequest $request): void;


	/**
	 * Synthesizes a tap gesture over a time period by issuing appropriate touch events.
	 *
	 * @param ContextInterface $ctx
	 * @param SynthesizeTapGestureRequest $request
	 *
	 * @return void
	 */
	public function synthesizeTapGesture(ContextInterface $ctx, SynthesizeTapGestureRequest $request): void;
}
