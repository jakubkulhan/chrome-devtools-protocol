<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
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

/**
 * Supports additional targets discovery and allows to attach to them.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface TargetDomainInterface
{
	/**
	 * Activates (focuses) the target.
	 *
	 * @param ContextInterface $ctx
	 * @param ActivateTargetRequest $request
	 *
	 * @return void
	 */
	public function activateTarget(ContextInterface $ctx, ActivateTargetRequest $request): void;


	/**
	 * Attaches to the target with given id.
	 *
	 * @param ContextInterface $ctx
	 * @param AttachToTargetRequest $request
	 *
	 * @return AttachToTargetResponse
	 */
	public function attachToTarget(ContextInterface $ctx, AttachToTargetRequest $request): AttachToTargetResponse;


	/**
	 * Closes the target. If the target is a page that gets closed too.
	 *
	 * @param ContextInterface $ctx
	 * @param CloseTargetRequest $request
	 *
	 * @return CloseTargetResponse
	 */
	public function closeTarget(ContextInterface $ctx, CloseTargetRequest $request): CloseTargetResponse;


	/**
	 * Creates a new empty BrowserContext. Similar to an incognito profile but you can have more than one.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return CreateBrowserContextResponse
	 */
	public function createBrowserContext(ContextInterface $ctx): CreateBrowserContextResponse;


	/**
	 * Creates a new page.
	 *
	 * @param ContextInterface $ctx
	 * @param CreateTargetRequest $request
	 *
	 * @return CreateTargetResponse
	 */
	public function createTarget(ContextInterface $ctx, CreateTargetRequest $request): CreateTargetResponse;


	/**
	 * Detaches session with given id.
	 *
	 * @param ContextInterface $ctx
	 * @param DetachFromTargetRequest $request
	 *
	 * @return void
	 */
	public function detachFromTarget(ContextInterface $ctx, DetachFromTargetRequest $request): void;


	/**
	 * Deletes a BrowserContext, will fail of any open page uses it.
	 *
	 * @param ContextInterface $ctx
	 * @param DisposeBrowserContextRequest $request
	 *
	 * @return DisposeBrowserContextResponse
	 */
	public function disposeBrowserContext(ContextInterface $ctx, DisposeBrowserContextRequest $request): DisposeBrowserContextResponse;


	/**
	 * Returns information about a target.
	 *
	 * @param ContextInterface $ctx
	 * @param GetTargetInfoRequest $request
	 *
	 * @return GetTargetInfoResponse
	 */
	public function getTargetInfo(ContextInterface $ctx, GetTargetInfoRequest $request): GetTargetInfoResponse;


	/**
	 * Retrieves a list of available targets.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetTargetsResponse
	 */
	public function getTargets(ContextInterface $ctx): GetTargetsResponse;


	/**
	 * Sends protocol message over session with given id.
	 *
	 * @param ContextInterface $ctx
	 * @param SendMessageToTargetRequest $request
	 *
	 * @return void
	 */
	public function sendMessageToTarget(ContextInterface $ctx, SendMessageToTargetRequest $request): void;


	/**
	 * Call Target.setAttachToFrames command.
	 *
	 * @param ContextInterface $ctx
	 * @param SetAttachToFramesRequest $request
	 *
	 * @return void
	 */
	public function setAttachToFrames(ContextInterface $ctx, SetAttachToFramesRequest $request): void;


	/**
	 * Controls whether to automatically attach to new targets which are considered to be related to this one. When turned on, attaches to all existing related targets as well. When turned off, automatically detaches from all currently attached targets.
	 *
	 * @param ContextInterface $ctx
	 * @param SetAutoAttachRequest $request
	 *
	 * @return void
	 */
	public function setAutoAttach(ContextInterface $ctx, SetAutoAttachRequest $request): void;


	/**
	 * Controls whether to discover available targets and notify via `targetCreated/targetInfoChanged/targetDestroyed` events.
	 *
	 * @param ContextInterface $ctx
	 * @param SetDiscoverTargetsRequest $request
	 *
	 * @return void
	 */
	public function setDiscoverTargets(ContextInterface $ctx, SetDiscoverTargetsRequest $request): void;


	/**
	 * Enables target discovery for the specified locations, when `setDiscoverTargets` was set to `true`.
	 *
	 * @param ContextInterface $ctx
	 * @param SetRemoteLocationsRequest $request
	 *
	 * @return void
	 */
	public function setRemoteLocations(ContextInterface $ctx, SetRemoteLocationsRequest $request): void;


	/**
	 * Issued when attached to target because of auto-attach or `attachToTarget` command.
	 *
	 * Listener will be called whenever event Target.attachedToTarget is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addAttachedToTargetListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when attached to target because of auto-attach or `attachToTarget` command.
	 *
	 * Method will block until first Target.attachedToTarget event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return AttachedToTargetEvent
	 */
	public function awaitAttachedToTarget(ContextInterface $ctx): AttachedToTargetEvent;


	/**
	 * Issued when detached from target for any reason (including `detachFromTarget` command). Can be issued multiple times per target if multiple sessions have been attached to it.
	 *
	 * Listener will be called whenever event Target.detachedFromTarget is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDetachedFromTargetListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when detached from target for any reason (including `detachFromTarget` command). Can be issued multiple times per target if multiple sessions have been attached to it.
	 *
	 * Method will block until first Target.detachedFromTarget event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DetachedFromTargetEvent
	 */
	public function awaitDetachedFromTarget(ContextInterface $ctx): DetachedFromTargetEvent;


	/**
	 * Notifies about a new protocol message received from the session (as reported in `attachedToTarget` event).
	 *
	 * Listener will be called whenever event Target.receivedMessageFromTarget is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addReceivedMessageFromTargetListener(callable $listener): SubscriptionInterface;


	/**
	 * Notifies about a new protocol message received from the session (as reported in `attachedToTarget` event).
	 *
	 * Method will block until first Target.receivedMessageFromTarget event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ReceivedMessageFromTargetEvent
	 */
	public function awaitReceivedMessageFromTarget(ContextInterface $ctx): ReceivedMessageFromTargetEvent;


	/**
	 * Issued when a possible inspection target is created.
	 *
	 * Listener will be called whenever event Target.targetCreated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addTargetCreatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when a possible inspection target is created.
	 *
	 * Method will block until first Target.targetCreated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return TargetCreatedEvent
	 */
	public function awaitTargetCreated(ContextInterface $ctx): TargetCreatedEvent;


	/**
	 * Issued when a target is destroyed.
	 *
	 * Listener will be called whenever event Target.targetDestroyed is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addTargetDestroyedListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when a target is destroyed.
	 *
	 * Method will block until first Target.targetDestroyed event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return TargetDestroyedEvent
	 */
	public function awaitTargetDestroyed(ContextInterface $ctx): TargetDestroyedEvent;


	/**
	 * Issued when some information about a target has changed. This only happens between `targetCreated` and `targetDestroyed`.
	 *
	 * Listener will be called whenever event Target.targetInfoChanged is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addTargetInfoChangedListener(callable $listener): SubscriptionInterface;


	/**
	 * Issued when some information about a target has changed. This only happens between `targetCreated` and `targetDestroyed`.
	 *
	 * Method will block until first Target.targetInfoChanged event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return TargetInfoChangedEvent
	 */
	public function awaitTargetInfoChanged(ContextInterface $ctx): TargetInfoChangedEvent;
}
