<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Target\ActivateTargetRequest;
use ChromeDevtoolsProtocol\Model\Target\AttachToTargetRequest;
use ChromeDevtoolsProtocol\Model\Target\AttachToTargetResponse;
use ChromeDevtoolsProtocol\Model\Target\AttachedToTargetEvent;
use ChromeDevtoolsProtocol\Model\Target\CloseTargetRequest;
use ChromeDevtoolsProtocol\Model\Target\CloseTargetResponse;
use ChromeDevtoolsProtocol\Model\Target\CreateBrowserContextResponse;
use ChromeDevtoolsProtocol\Model\Target\CreateTargetRequest;
use ChromeDevtoolsProtocol\Model\Target\CreateTargetResponse;
use ChromeDevtoolsProtocol\Model\Target\DetachFromTargetRequest;
use ChromeDevtoolsProtocol\Model\Target\DetachedFromTargetEvent;
use ChromeDevtoolsProtocol\Model\Target\DisposeBrowserContextRequest;
use ChromeDevtoolsProtocol\Model\Target\DisposeBrowserContextResponse;
use ChromeDevtoolsProtocol\Model\Target\GetTargetInfoRequest;
use ChromeDevtoolsProtocol\Model\Target\GetTargetInfoResponse;
use ChromeDevtoolsProtocol\Model\Target\GetTargetsResponse;
use ChromeDevtoolsProtocol\Model\Target\ReceivedMessageFromTargetEvent;
use ChromeDevtoolsProtocol\Model\Target\SendMessageToTargetRequest;
use ChromeDevtoolsProtocol\Model\Target\SetAttachToFramesRequest;
use ChromeDevtoolsProtocol\Model\Target\SetAutoAttachRequest;
use ChromeDevtoolsProtocol\Model\Target\SetDiscoverTargetsRequest;
use ChromeDevtoolsProtocol\Model\Target\SetRemoteLocationsRequest;
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


	public function setDiscoverTargets(ContextInterface $ctx, SetDiscoverTargetsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Target.setDiscoverTargets', $request);
	}


	public function setAutoAttach(ContextInterface $ctx, SetAutoAttachRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Target.setAutoAttach', $request);
	}


	public function setAttachToFrames(ContextInterface $ctx, SetAttachToFramesRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Target.setAttachToFrames', $request);
	}


	public function setRemoteLocations(ContextInterface $ctx, SetRemoteLocationsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Target.setRemoteLocations', $request);
	}


	public function sendMessageToTarget(ContextInterface $ctx, SendMessageToTargetRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Target.sendMessageToTarget', $request);
	}


	public function getTargetInfo(ContextInterface $ctx, GetTargetInfoRequest $request): GetTargetInfoResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Target.getTargetInfo', $request);
		return GetTargetInfoResponse::fromJson($response);
	}


	public function activateTarget(ContextInterface $ctx, ActivateTargetRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Target.activateTarget', $request);
	}


	public function closeTarget(ContextInterface $ctx, CloseTargetRequest $request): CloseTargetResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Target.closeTarget', $request);
		return CloseTargetResponse::fromJson($response);
	}


	public function attachToTarget(ContextInterface $ctx, AttachToTargetRequest $request): AttachToTargetResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Target.attachToTarget', $request);
		return AttachToTargetResponse::fromJson($response);
	}


	public function detachFromTarget(ContextInterface $ctx, DetachFromTargetRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Target.detachFromTarget', $request);
	}


	public function createBrowserContext(ContextInterface $ctx): CreateBrowserContextResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Target.createBrowserContext', $request);
		return CreateBrowserContextResponse::fromJson($response);
	}


	public function disposeBrowserContext(ContextInterface $ctx, DisposeBrowserContextRequest $request): DisposeBrowserContextResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Target.disposeBrowserContext', $request);
		return DisposeBrowserContextResponse::fromJson($response);
	}


	public function createTarget(ContextInterface $ctx, CreateTargetRequest $request): CreateTargetResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Target.createTarget', $request);
		return CreateTargetResponse::fromJson($response);
	}


	public function getTargets(ContextInterface $ctx): GetTargetsResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Target.getTargets', $request);
		return GetTargetsResponse::fromJson($response);
	}


	public function addTargetCreatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Target.targetCreated', $listener);
	}


	public function awaitTargetCreated(ContextInterface $ctx): TargetCreatedEvent
	{
		return TargetCreatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Target.targetCreated'));
	}


	public function addTargetInfoChangedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Target.targetInfoChanged', $listener);
	}


	public function awaitTargetInfoChanged(ContextInterface $ctx): TargetInfoChangedEvent
	{
		return TargetInfoChangedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Target.targetInfoChanged'));
	}


	public function addTargetDestroyedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Target.targetDestroyed', $listener);
	}


	public function awaitTargetDestroyed(ContextInterface $ctx): TargetDestroyedEvent
	{
		return TargetDestroyedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Target.targetDestroyed'));
	}


	public function addAttachedToTargetListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Target.attachedToTarget', $listener);
	}


	public function awaitAttachedToTarget(ContextInterface $ctx): AttachedToTargetEvent
	{
		return AttachedToTargetEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Target.attachedToTarget'));
	}


	public function addDetachedFromTargetListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Target.detachedFromTarget', $listener);
	}


	public function awaitDetachedFromTarget(ContextInterface $ctx): DetachedFromTargetEvent
	{
		return DetachedFromTargetEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Target.detachedFromTarget'));
	}


	public function addReceivedMessageFromTargetListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Target.receivedMessageFromTarget', $listener);
	}


	public function awaitReceivedMessageFromTarget(ContextInterface $ctx): ReceivedMessageFromTargetEvent
	{
		return ReceivedMessageFromTargetEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Target.receivedMessageFromTarget'));
	}
}
