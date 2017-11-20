<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Animation\AnimationCanceledEvent;
use ChromeDevtoolsProtocol\Model\Animation\AnimationCreatedEvent;
use ChromeDevtoolsProtocol\Model\Animation\AnimationStartedEvent;
use ChromeDevtoolsProtocol\Model\Animation\GetCurrentTimeRequest;
use ChromeDevtoolsProtocol\Model\Animation\GetCurrentTimeResponse;
use ChromeDevtoolsProtocol\Model\Animation\GetPlaybackRateResponse;
use ChromeDevtoolsProtocol\Model\Animation\ReleaseAnimationsRequest;
use ChromeDevtoolsProtocol\Model\Animation\ResolveAnimationRequest;
use ChromeDevtoolsProtocol\Model\Animation\ResolveAnimationResponse;
use ChromeDevtoolsProtocol\Model\Animation\SeekAnimationsRequest;
use ChromeDevtoolsProtocol\Model\Animation\SetPausedRequest;
use ChromeDevtoolsProtocol\Model\Animation\SetPlaybackRateRequest;
use ChromeDevtoolsProtocol\Model\Animation\SetTimingRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * Animation domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface AnimationDomainInterface
{
	/**
	 * Enables animation domain notifications.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Disables animation domain notifications.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Gets the playback rate of the document timeline.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetPlaybackRateResponse
	 */
	public function getPlaybackRate(ContextInterface $ctx): GetPlaybackRateResponse;


	/**
	 * Sets the playback rate of the document timeline.
	 *
	 * @param ContextInterface $ctx
	 * @param SetPlaybackRateRequest $request
	 *
	 * @return void
	 */
	public function setPlaybackRate(ContextInterface $ctx, SetPlaybackRateRequest $request): void;


	/**
	 * Returns the current time of the an animation.
	 *
	 * @param ContextInterface $ctx
	 * @param GetCurrentTimeRequest $request
	 *
	 * @return GetCurrentTimeResponse
	 */
	public function getCurrentTime(ContextInterface $ctx, GetCurrentTimeRequest $request): GetCurrentTimeResponse;


	/**
	 * Sets the paused state of a set of animations.
	 *
	 * @param ContextInterface $ctx
	 * @param SetPausedRequest $request
	 *
	 * @return void
	 */
	public function setPaused(ContextInterface $ctx, SetPausedRequest $request): void;


	/**
	 * Sets the timing of an animation node.
	 *
	 * @param ContextInterface $ctx
	 * @param SetTimingRequest $request
	 *
	 * @return void
	 */
	public function setTiming(ContextInterface $ctx, SetTimingRequest $request): void;


	/**
	 * Seek a set of animations to a particular time within each animation.
	 *
	 * @param ContextInterface $ctx
	 * @param SeekAnimationsRequest $request
	 *
	 * @return void
	 */
	public function seekAnimations(ContextInterface $ctx, SeekAnimationsRequest $request): void;


	/**
	 * Releases a set of animations to no longer be manipulated.
	 *
	 * @param ContextInterface $ctx
	 * @param ReleaseAnimationsRequest $request
	 *
	 * @return void
	 */
	public function releaseAnimations(ContextInterface $ctx, ReleaseAnimationsRequest $request): void;


	/**
	 * Gets the remote object of the Animation.
	 *
	 * @param ContextInterface $ctx
	 * @param ResolveAnimationRequest $request
	 *
	 * @return ResolveAnimationResponse
	 */
	public function resolveAnimation(ContextInterface $ctx, ResolveAnimationRequest $request): ResolveAnimationResponse;


	/**
	 * Event for each animation that has been created.
	 *
	 * Listener will be called whenever event Animation.animationCreated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addAnimationCreatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Event for each animation that has been created.
	 *
	 * Method will block until first Animation.animationCreated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return AnimationCreatedEvent
	 */
	public function awaitAnimationCreated(ContextInterface $ctx): AnimationCreatedEvent;


	/**
	 * Event for animation that has been started.
	 *
	 * Listener will be called whenever event Animation.animationStarted is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addAnimationStartedListener(callable $listener): SubscriptionInterface;


	/**
	 * Event for animation that has been started.
	 *
	 * Method will block until first Animation.animationStarted event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return AnimationStartedEvent
	 */
	public function awaitAnimationStarted(ContextInterface $ctx): AnimationStartedEvent;


	/**
	 * Event for when an animation has been cancelled.
	 *
	 * Listener will be called whenever event Animation.animationCanceled is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addAnimationCanceledListener(callable $listener): SubscriptionInterface;


	/**
	 * Event for when an animation has been cancelled.
	 *
	 * Method will block until first Animation.animationCanceled event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return AnimationCanceledEvent
	 */
	public function awaitAnimationCanceled(ContextInterface $ctx): AnimationCanceledEvent;
}
