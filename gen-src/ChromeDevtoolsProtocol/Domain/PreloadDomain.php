<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
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
