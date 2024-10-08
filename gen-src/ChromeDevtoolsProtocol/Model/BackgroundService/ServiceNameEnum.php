<?php

namespace ChromeDevtoolsProtocol\Model\BackgroundService;

/**
 * The Background Service that will be associated with the commands/events. Every Background Service operates independently, but they share the same API.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ServiceNameEnum
{
	public const BACKGROUND_FETCH = 'backgroundFetch';
	public const BACKGROUND_SYNC = 'backgroundSync';
	public const PUSH_MESSAGING = 'pushMessaging';
	public const NOTIFICATIONS = 'notifications';
	public const PAYMENT_HANDLER = 'paymentHandler';
	public const PERIODIC_BACKGROUND_SYNC = 'periodicBackgroundSync';
}
