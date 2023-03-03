<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\FedCm\DialogShownEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * This domain allows interacting with the FedCM dialog.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface FedCmDomainInterface
{
	/**
	 * Call FedCm.disable command.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Call FedCm.enable command.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Subscribe to FedCm.dialogShown event.
	 *
	 * Listener will be called whenever event FedCm.dialogShown is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDialogShownListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for FedCm.dialogShown event.
	 *
	 * Method will block until first FedCm.dialogShown event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DialogShownEvent
	 */
	public function awaitDialogShown(ContextInterface $ctx): DialogShownEvent;
}
