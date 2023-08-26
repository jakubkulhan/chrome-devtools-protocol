<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\FedCm\ConfirmIdpSigninRequest;
use ChromeDevtoolsProtocol\Model\FedCm\DialogShownEvent;
use ChromeDevtoolsProtocol\Model\FedCm\DismissDialogRequest;
use ChromeDevtoolsProtocol\Model\FedCm\EnableRequest;
use ChromeDevtoolsProtocol\Model\FedCm\SelectAccountRequest;
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
	 * Only valid if the dialog type is ConfirmIdpSignin. Acts as if the user had clicked the continue button.
	 *
	 * @param ContextInterface $ctx
	 * @param ConfirmIdpSigninRequest $request
	 *
	 * @return void
	 */
	public function confirmIdpSignin(ContextInterface $ctx, ConfirmIdpSigninRequest $request): void;


	/**
	 * Call FedCm.disable command.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Call FedCm.dismissDialog command.
	 *
	 * @param ContextInterface $ctx
	 * @param DismissDialogRequest $request
	 *
	 * @return void
	 */
	public function dismissDialog(ContextInterface $ctx, DismissDialogRequest $request): void;


	/**
	 * Call FedCm.enable command.
	 *
	 * @param ContextInterface $ctx
	 * @param EnableRequest $request
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx, EnableRequest $request): void;


	/**
	 * Resets the cooldown time, if any, to allow the next FedCM call to show a dialog even if one was recently dismissed by the user.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function resetCooldown(ContextInterface $ctx): void;


	/**
	 * Call FedCm.selectAccount command.
	 *
	 * @param ContextInterface $ctx
	 * @param SelectAccountRequest $request
	 *
	 * @return void
	 */
	public function selectAccount(ContextInterface $ctx, SelectAccountRequest $request): void;


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
