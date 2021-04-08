<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Input\DispatchDragEventRequest;
use ChromeDevtoolsProtocol\Model\Input\DispatchKeyEventRequest;
use ChromeDevtoolsProtocol\Model\Input\DispatchMouseEventRequest;
use ChromeDevtoolsProtocol\Model\Input\DispatchTouchEventRequest;
use ChromeDevtoolsProtocol\Model\Input\DragInterceptedEvent;
use ChromeDevtoolsProtocol\Model\Input\EmulateTouchFromMouseEventRequest;
use ChromeDevtoolsProtocol\Model\Input\InsertTextRequest;
use ChromeDevtoolsProtocol\Model\Input\SetIgnoreInputEventsRequest;
use ChromeDevtoolsProtocol\Model\Input\SetInterceptDragsRequest;
use ChromeDevtoolsProtocol\Model\Input\SynthesizePinchGestureRequest;
use ChromeDevtoolsProtocol\Model\Input\SynthesizeScrollGestureRequest;
use ChromeDevtoolsProtocol\Model\Input\SynthesizeTapGestureRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

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
	 * Dispatches a drag event into the page.
	 *
	 * @param ContextInterface $ctx
	 * @param DispatchDragEventRequest $request
	 *
	 * @return void
	 */
	public function dispatchDragEvent(ContextInterface $ctx, DispatchDragEventRequest $request): void;


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
	 * Prevents default drag and drop behavior and instead emits `Input.dragIntercepted` events. Drag and drop behavior can be directly controlled via `Input.dispatchDragEvent`.
	 *
	 * @param ContextInterface $ctx
	 * @param SetInterceptDragsRequest $request
	 *
	 * @return void
	 */
	public function setInterceptDrags(ContextInterface $ctx, SetInterceptDragsRequest $request): void;


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


	/**
	 * Emitted only when `Input.setInterceptDrags` is enabled. Use this data with `Input.dispatchDragEvent` to restore normal drag and drop behavior.
	 *
	 * Listener will be called whenever event Input.dragIntercepted is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDragInterceptedListener(callable $listener): SubscriptionInterface;


	/**
	 * Emitted only when `Input.setInterceptDrags` is enabled. Use this data with `Input.dispatchDragEvent` to restore normal drag and drop behavior.
	 *
	 * Method will block until first Input.dragIntercepted event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DragInterceptedEvent
	 */
	public function awaitDragIntercepted(ContextInterface $ctx): DragInterceptedEvent;
}
