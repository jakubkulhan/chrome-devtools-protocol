<?php
namespace ChromeDevtoolsProtocol;

/**
 * Cancellable event subscription.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface SubscriptionInterface
{
	public function cancel(): void;
}
