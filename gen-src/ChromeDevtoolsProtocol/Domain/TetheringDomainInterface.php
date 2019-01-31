<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Tethering\AcceptedEvent;
use ChromeDevtoolsProtocol\Model\Tethering\BindRequest;
use ChromeDevtoolsProtocol\Model\Tethering\UnbindRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * The Tethering domain defines methods and events for browser port binding.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface TetheringDomainInterface
{
	/**
	 * Request browser port binding.
	 *
	 * @param ContextInterface $ctx
	 * @param BindRequest $request
	 *
	 * @return void
	 */
	public function bind(ContextInterface $ctx, BindRequest $request): void;


	/**
	 * Request browser port unbinding.
	 *
	 * @param ContextInterface $ctx
	 * @param UnbindRequest $request
	 *
	 * @return void
	 */
	public function unbind(ContextInterface $ctx, UnbindRequest $request): void;


	/**
	 * Informs that port was successfully bound and got a specified connection id.
	 *
	 * Listener will be called whenever event Tethering.accepted is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addAcceptedListener(callable $listener): SubscriptionInterface;


	/**
	 * Informs that port was successfully bound and got a specified connection id.
	 *
	 * Method will block until first Tethering.accepted event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return AcceptedEvent
	 */
	public function awaitAccepted(ContextInterface $ctx): AcceptedEvent;
}
