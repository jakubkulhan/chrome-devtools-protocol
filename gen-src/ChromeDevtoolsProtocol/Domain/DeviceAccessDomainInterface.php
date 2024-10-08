<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\DeviceAccess\CancelPromptRequest;
use ChromeDevtoolsProtocol\Model\DeviceAccess\DeviceRequestPromptedEvent;
use ChromeDevtoolsProtocol\Model\DeviceAccess\SelectPromptRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * DeviceAccess domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface DeviceAccessDomainInterface
{
	/**
	 * Cancel a prompt in response to a DeviceAccess.deviceRequestPrompted event.
	 *
	 * @param ContextInterface $ctx
	 * @param CancelPromptRequest $request
	 *
	 * @return void
	 */
	public function cancelPrompt(ContextInterface $ctx, CancelPromptRequest $request): void;


	/**
	 * Disable events in this domain.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enable events in this domain.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Select a device in response to a DeviceAccess.deviceRequestPrompted event.
	 *
	 * @param ContextInterface $ctx
	 * @param SelectPromptRequest $request
	 *
	 * @return void
	 */
	public function selectPrompt(ContextInterface $ctx, SelectPromptRequest $request): void;


	/**
	 * A device request opened a user prompt to select a device. Respond with the selectPrompt or cancelPrompt command.
	 *
	 * Listener will be called whenever event DeviceAccess.deviceRequestPrompted is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDeviceRequestPromptedListener(callable $listener): SubscriptionInterface;


	/**
	 * A device request opened a user prompt to select a device. Respond with the selectPrompt or cancelPrompt command.
	 *
	 * Method will block until first DeviceAccess.deviceRequestPrompted event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DeviceRequestPromptedEvent
	 */
	public function awaitDeviceRequestPrompted(ContextInterface $ctx): DeviceRequestPromptedEvent;
}
