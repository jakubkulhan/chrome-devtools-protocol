<?php

namespace ChromeDevtoolsProtocol\Model\Preload;

/**
 * Preloading status values, see also PreloadingTriggeringOutcome. This status is shared by prefetchStatusUpdated and prerenderStatusUpdated.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PreloadingStatusEnum
{
	public const PENDING = 'Pending';
	public const RUNNING = 'Running';
	public const READY = 'Ready';
	public const SUCCESS = 'Success';
	public const FAILURE = 'Failure';
	public const NOT_SUPPORTED = 'NotSupported';
}
