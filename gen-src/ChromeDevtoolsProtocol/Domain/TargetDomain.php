<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Target\ActivateTargetRequest;
use ChromeDevtoolsProtocol\Model\Target\AttachToBrowserTargetResponse;
use ChromeDevtoolsProtocol\Model\Target\AttachToTargetRequest;
use ChromeDevtoolsProtocol\Model\Target\AttachToTargetResponse;
use ChromeDevtoolsProtocol\Model\Target\AttachedToTargetEvent;
use ChromeDevtoolsProtocol\Model\Target\AutoAttachRelatedRequest;
use ChromeDevtoolsProtocol\Model\Target\CloseTargetRequest;
use ChromeDevtoolsProtocol\Model\Target\CloseTargetResponse;
use ChromeDevtoolsProtocol\Model\Target\CreateBrowserContextRequest;
use ChromeDevtoolsProtocol\Model\Target\CreateBrowserContextResponse;
use ChromeDevtoolsProtocol\Model\Target\CreateTargetRequest;
use ChromeDevtoolsProtocol\Model\Target\CreateTargetResponse;
use ChromeDevtoolsProtocol\Model\Target\DetachFromTargetRequest;
use ChromeDevtoolsProtocol\Model\Target\DetachedFromTargetEvent;
use ChromeDevtoolsProtocol\Model\Target\DisposeBrowserContextRequest;
use ChromeDevtoolsProtocol\Model\Target\ExposeDevToolsProtocolRequest;
use ChromeDevtoolsProtocol\Model\Target\GetBrowserContextsResponse;
use ChromeDevtoolsProtocol\Model\Target\GetTargetInfoRequest;
use ChromeDevtoolsProtocol\Model\Target\GetTargetInfoResponse;
use ChromeDevtoolsProtocol\Model\Target\GetTargetsRequest;
use ChromeDevtoolsProtocol\Model\Target\GetTargetsResponse;
use ChromeDevtoolsProtocol\Model\Target\ReceivedMessageFromTargetEvent;
use ChromeDevtoolsProtocol\Model\Target\SendMessageToTargetRequest;
use ChromeDevtoolsProtocol\Model\Target\SetAutoAttachRequest;
use ChromeDevtoolsProtocol\Model\Target\SetDiscoverTargetsRequest;
use ChromeDevtoolsProtocol\Model\Target\SetRemoteLocationsRequest;
use ChromeDevtoolsProtocol\Model\Target\TargetCrashedEvent;
use ChromeDevtoolsProtocol\Model\Target\TargetCreatedEvent;
use ChromeDevtoolsProtocol\Model\Target\TargetDestroyedEvent;
use ChromeDevtoolsProtocol\Model\Target\TargetInfoChangedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class TargetDomain implements TargetDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function activateTarget(ContextInterface $ctx, ActivateTargetRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Target.activateTarget', $request);
	}


	public function attachToBrowserTarget(ContextInterface $ctx): AttachToBrowserTargetResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Target.attachToBrowserTarget', $request);
		return AttachToBrowserTargetResponse::fromJson($response);
	}


	public function attachToTarget(ContextInterface $ctx, AttachToTargetRequest $request): AttachToTargetResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Target.attachToTarget', $request);
		return AttachToTargetResponse::fromJson($response);
	}


	public function autoAttachRelated(ContextInterface $ctx, AutoAttachRelatedRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Target.autoAttachRelated', $request);
	}


	public function closeTarget(ContextInterface $ctx, CloseTargetRequest $request): CloseTargetResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Target.closeTarget', $request);
		return CloseTargetResponse::fromJson($response);
	}


	public function createBrowserContext(
		ContextInterface $ctx,
		CreateBrowserContextRequest $request
	): CreateBrowserContextResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Target.createBrowserContext', $request);
		return CreateBrowserContextResponse::fromJson($response);
	}


	public function createTarget(ContextInterface $ctx, CreateTargetRequest $request): CreateTargetResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Target.createTarget', $request);
		return CreateTargetResponse::fromJson($response);
	}


	public function detachFromTarget(ContextInterface $ctx, DetachFromTargetRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Target.detachFromTarget', $request);
	}


	public function disposeBrowserContext(ContextInterface $ctx, DisposeBrowserContextRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Target.disposeBrowserContext', $request);
	}


	public function exposeDevToolsProtocol(ContextInterface $ctx, ExposeDevToolsProtocolRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Target.exposeDevToolsProtocol', $request);
	}


	public function getBrowserContexts(ContextInterface $ctx): GetBrowserContextsResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Target.getBrowserContexts', $request);
		return GetBrowserContextsResponse::fromJson($response);
	}


	public function getTargetInfo(ContextInterface $ctx, GetTargetInfoRequest $request): GetTargetInfoResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Target.getTargetInfo', $request);
		return GetTargetInfoResponse::fromJson($response);
	}


	public function getTargets(ContextInterface $ctx, GetTargetsRequest $request): GetTargetsResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Target.getTargets', $request);
		return GetTargetsResponse::fromJson($response);
	}


	public function sendMessageToTarget(ContextInterface $ctx, SendMessageToTargetRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Target.sendMessageToTarget', $request);
	}


	public function setAutoAttach(ContextInterface $ctx, SetAutoAttachRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Target.setAutoAttach', $request);
	}


	public function setDiscoverTargets(ContextInterface $ctx, SetDiscoverTargetsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Target.setDiscoverTargets', $request);
	}


	public function setRemoteLocations(ContextInterface $ctx, SetRemoteLocationsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Target.setRemoteLocations', $request);
	}


	public function addAttachedToTargetListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Target.attachedToTarget', function ($event) use ($listener) {
			return $listener(AttachedToTargetEvent::fromJson($event));
		});
	}


	public function awaitAttachedToTarget(ContextInterface $ctx): AttachedToTargetEvent
	{
		return AttachedToTargetEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Target.attachedToTarget'));
	}


	public function addDetachedFromTargetListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Target.detachedFromTarget', function ($event) use ($listener) {
			return $listener(DetachedFromTargetEvent::fromJson($event));
		});
	}


	public function awaitDetachedFromTarget(ContextInterface $ctx): DetachedFromTargetEvent
	{
		return DetachedFromTargetEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Target.detachedFromTarget'));
	}


	public function addReceivedMessageFromTargetListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Target.receivedMessageFromTarget', function ($event) use ($listener) {
			return $listener(ReceivedMessageFromTargetEvent::fromJson($event));
		});
	}


	public function awaitReceivedMessageFromTarget(ContextInterface $ctx): ReceivedMessageFromTargetEvent
	{
		return ReceivedMessageFromTargetEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Target.receivedMessageFromTarget'));
	}


	public function addTargetCrashedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Target.targetCrashed', function ($event) use ($listener) {
			return $listener(TargetCrashedEvent::fromJson($event));
		});
	}


	public function awaitTargetCrashed(ContextInterface $ctx): TargetCrashedEvent
	{
		return TargetCrashedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Target.targetCrashed'));
	}


	public function addTargetCreatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Target.targetCreated', function ($event) use ($listener) {
			return $listener(TargetCreatedEvent::fromJson($event));
		});
	}


	public function awaitTargetCreated(ContextInterface $ctx): TargetCreatedEvent
	{
		return TargetCreatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Target.targetCreated'));
	}


	public function addTargetDestroyedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Target.targetDestroyed', function ($event) use ($listener) {
			return $listener(TargetDestroyedEvent::fromJson($event));
		});
	}


	public function awaitTargetDestroyed(ContextInterface $ctx): TargetDestroyedEvent
	{
		return TargetDestroyedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Target.targetDestroyed'));
	}


	public function addTargetInfoChangedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Target.targetInfoChanged', function ($event) use ($listener) {
			return $listener(TargetInfoChangedEvent::fromJson($event));
		});
	}


	public function awaitTargetInfoChanged(ContextInterface $ctx): TargetInfoChangedEvent
	{
		return TargetInfoChangedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Target.targetInfoChanged'));
	}
}
