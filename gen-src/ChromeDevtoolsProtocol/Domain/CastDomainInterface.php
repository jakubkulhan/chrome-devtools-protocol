<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Cast\EnableRequest;
use ChromeDevtoolsProtocol\Model\Cast\IssueUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Cast\SetSinkToUseRequest;
use ChromeDevtoolsProtocol\Model\Cast\SinksUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Cast\StartDesktopMirroringRequest;
use ChromeDevtoolsProtocol\Model\Cast\StartTabMirroringRequest;
use ChromeDevtoolsProtocol\Model\Cast\StopCastingRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * A domain for interacting with Cast, Presentation API, and Remote Playback API functionalities.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface CastDomainInterface
{
	/**
	 * Stops observing for sinks and issues.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Starts observing for sinks that can be used for tab mirroring, and if set, sinks compatible with |presentationUrl| as well. When sinks are found, a |sinksUpdated| event is fired. Also starts observing for issue messages. When an issue is added or removed, an |issueUpdated| event is fired.
	 *
	 * @param ContextInterface $ctx
	 * @param EnableRequest $request
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx, EnableRequest $request): void;


	/**
	 * Sets a sink to be used when the web page requests the browser to choose a sink via Presentation API, Remote Playback API, or Cast SDK.
	 *
	 * @param ContextInterface $ctx
	 * @param SetSinkToUseRequest $request
	 *
	 * @return void
	 */
	public function setSinkToUse(ContextInterface $ctx, SetSinkToUseRequest $request): void;


	/**
	 * Starts mirroring the desktop to the sink.
	 *
	 * @param ContextInterface $ctx
	 * @param StartDesktopMirroringRequest $request
	 *
	 * @return void
	 */
	public function startDesktopMirroring(ContextInterface $ctx, StartDesktopMirroringRequest $request): void;


	/**
	 * Starts mirroring the tab to the sink.
	 *
	 * @param ContextInterface $ctx
	 * @param StartTabMirroringRequest $request
	 *
	 * @return void
	 */
	public function startTabMirroring(ContextInterface $ctx, StartTabMirroringRequest $request): void;


	/**
	 * Stops the active Cast session on the sink.
	 *
	 * @param ContextInterface $ctx
	 * @param StopCastingRequest $request
	 *
	 * @return void
	 */
	public function stopCasting(ContextInterface $ctx, StopCastingRequest $request): void;


	/**
	 * This is fired whenever the outstanding issue/error message changes. |issueMessage| is empty if there is no issue.
	 *
	 * Listener will be called whenever event Cast.issueUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addIssueUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * This is fired whenever the outstanding issue/error message changes. |issueMessage| is empty if there is no issue.
	 *
	 * Method will block until first Cast.issueUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return IssueUpdatedEvent
	 */
	public function awaitIssueUpdated(ContextInterface $ctx): IssueUpdatedEvent;


	/**
	 * This is fired whenever the list of available sinks changes. A sink is a device or a software surface that you can cast to.
	 *
	 * Listener will be called whenever event Cast.sinksUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addSinksUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * This is fired whenever the list of available sinks changes. A sink is a device or a software surface that you can cast to.
	 *
	 * Method will block until first Cast.sinksUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return SinksUpdatedEvent
	 */
	public function awaitSinksUpdated(ContextInterface $ctx): SinksUpdatedEvent;
}
