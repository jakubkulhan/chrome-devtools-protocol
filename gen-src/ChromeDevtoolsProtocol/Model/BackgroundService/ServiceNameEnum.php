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
	const BACKGROUND_FETCH = 'backgroundFetch';
	const BACKGROUND_SYNC = 'backgroundSync';
	const PUSH_MESSAGING = 'pushMessaging';
	const NOTIFICATIONS = 'notifications';
	const PAYMENT_HANDLER = 'paymentHandler';
	const PERIODIC_BACKGROUND_SYNC = 'periodicBackgroundSync';
}
