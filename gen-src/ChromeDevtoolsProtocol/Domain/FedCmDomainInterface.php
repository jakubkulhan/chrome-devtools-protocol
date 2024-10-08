<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\FedCm\ClickDialogButtonRequest;
use ChromeDevtoolsProtocol\Model\FedCm\DialogClosedEvent;
use ChromeDevtoolsProtocol\Model\FedCm\DialogShownEvent;
use ChromeDevtoolsProtocol\Model\FedCm\DismissDialogRequest;
use ChromeDevtoolsProtocol\Model\FedCm\EnableRequest;
use ChromeDevtoolsProtocol\Model\FedCm\OpenUrlRequest;
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
	 * Call FedCm.clickDialogButton command.
	 *
	 * @param ContextInterface $ctx
	 * @param ClickDialogButtonRequest $request
	 *
	 * @return void
	 */
	public function clickDialogButton(ContextInterface $ctx, ClickDialogButtonRequest $request): void;


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
	 * Call FedCm.openUrl command.
	 *
	 * @param ContextInterface $ctx
	 * @param OpenUrlRequest $request
	 *
	 * @return void
	 */
	public function openUrl(ContextInterface $ctx, OpenUrlRequest $request): void;


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
	 * Triggered when a dialog is closed, either by user action, JS abort, or a command below.
	 *
	 * Listener will be called whenever event FedCm.dialogClosed is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDialogClosedListener(callable $listener): SubscriptionInterface;


	/**
	 * Triggered when a dialog is closed, either by user action, JS abort, or a command below.
	 *
	 * Method will block until first FedCm.dialogClosed event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DialogClosedEvent
	 */
	public function awaitDialogClosed(ContextInterface $ctx): DialogClosedEvent;


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
