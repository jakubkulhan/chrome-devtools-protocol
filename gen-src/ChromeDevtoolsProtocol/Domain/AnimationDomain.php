<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
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

class AnimationDomain implements AnimationDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Animation.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Animation.enable', $request);
	}


	public function getCurrentTime(ContextInterface $ctx, GetCurrentTimeRequest $request): GetCurrentTimeResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Animation.getCurrentTime', $request);
		return GetCurrentTimeResponse::fromJson($response);
	}


	public function getPlaybackRate(ContextInterface $ctx): GetPlaybackRateResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Animation.getPlaybackRate', $request);
		return GetPlaybackRateResponse::fromJson($response);
	}


	public function releaseAnimations(ContextInterface $ctx, ReleaseAnimationsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Animation.releaseAnimations', $request);
	}


	public function resolveAnimation(ContextInterface $ctx, ResolveAnimationRequest $request): ResolveAnimationResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Animation.resolveAnimation', $request);
		return ResolveAnimationResponse::fromJson($response);
	}


	public function seekAnimations(ContextInterface $ctx, SeekAnimationsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Animation.seekAnimations', $request);
	}


	public function setPaused(ContextInterface $ctx, SetPausedRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Animation.setPaused', $request);
	}


	public function setPlaybackRate(ContextInterface $ctx, SetPlaybackRateRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Animation.setPlaybackRate', $request);
	}


	public function setTiming(ContextInterface $ctx, SetTimingRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Animation.setTiming', $request);
	}


	public function addAnimationCanceledListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Animation.animationCanceled', function ($event) use ($listener) {
			return $listener(AnimationCanceledEvent::fromJson($event));
		});
	}


	public function awaitAnimationCanceled(ContextInterface $ctx): AnimationCanceledEvent
	{
		return AnimationCanceledEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Animation.animationCanceled'));
	}


	public function addAnimationCreatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Animation.animationCreated', function ($event) use ($listener) {
			return $listener(AnimationCreatedEvent::fromJson($event));
		});
	}


	public function awaitAnimationCreated(ContextInterface $ctx): AnimationCreatedEvent
	{
		return AnimationCreatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Animation.animationCreated'));
	}


	public function addAnimationStartedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Animation.animationStarted', function ($event) use ($listener) {
			return $listener(AnimationStartedEvent::fromJson($event));
		});
	}


	public function awaitAnimationStarted(ContextInterface $ctx): AnimationStartedEvent
	{
		return AnimationStartedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Animation.animationStarted'));
	}
}
