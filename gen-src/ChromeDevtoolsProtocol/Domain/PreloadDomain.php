<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Preload\PrefetchStatusUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Preload\PreloadingAttemptSourcesUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Preload\PrerenderAttemptCompletedEvent;
use ChromeDevtoolsProtocol\Model\Preload\PrerenderStatusUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Preload\RuleSetRemovedEvent;
use ChromeDevtoolsProtocol\Model\Preload\RuleSetUpdatedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class PreloadDomain implements PreloadDomainInterface
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
		$this->internalClient->executeCommand($ctx, 'Preload.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Preload.enable', $request);
	}


	public function addPrefetchStatusUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Preload.prefetchStatusUpdated', function ($event) use ($listener) {
			return $listener(PrefetchStatusUpdatedEvent::fromJson($event));
		});
	}


	public function awaitPrefetchStatusUpdated(ContextInterface $ctx): PrefetchStatusUpdatedEvent
	{
		return PrefetchStatusUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Preload.prefetchStatusUpdated'));
	}


	public function addPreloadingAttemptSourcesUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Preload.preloadingAttemptSourcesUpdated', function ($event) use ($listener) {
			return $listener(PreloadingAttemptSourcesUpdatedEvent::fromJson($event));
		});
	}


	public function awaitPreloadingAttemptSourcesUpdated(ContextInterface $ctx): PreloadingAttemptSourcesUpdatedEvent
	{
		return PreloadingAttemptSourcesUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Preload.preloadingAttemptSourcesUpdated'));
	}


	public function addPrerenderAttemptCompletedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Preload.prerenderAttemptCompleted', function ($event) use ($listener) {
			return $listener(PrerenderAttemptCompletedEvent::fromJson($event));
		});
	}


	public function awaitPrerenderAttemptCompleted(ContextInterface $ctx): PrerenderAttemptCompletedEvent
	{
		return PrerenderAttemptCompletedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Preload.prerenderAttemptCompleted'));
	}


	public function addPrerenderStatusUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Preload.prerenderStatusUpdated', function ($event) use ($listener) {
			return $listener(PrerenderStatusUpdatedEvent::fromJson($event));
		});
	}


	public function awaitPrerenderStatusUpdated(ContextInterface $ctx): PrerenderStatusUpdatedEvent
	{
		return PrerenderStatusUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Preload.prerenderStatusUpdated'));
	}


	public function addRuleSetRemovedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Preload.ruleSetRemoved', function ($event) use ($listener) {
			return $listener(RuleSetRemovedEvent::fromJson($event));
		});
	}


	public function awaitRuleSetRemoved(ContextInterface $ctx): RuleSetRemovedEvent
	{
		return RuleSetRemovedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Preload.ruleSetRemoved'));
	}


	public function addRuleSetUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Preload.ruleSetUpdated', function ($event) use ($listener) {
			return $listener(RuleSetUpdatedEvent::fromJson($event));
		});
	}


	public function awaitRuleSetUpdated(ContextInterface $ctx): RuleSetUpdatedEvent
	{
		return RuleSetUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Preload.ruleSetUpdated'));
	}
}
