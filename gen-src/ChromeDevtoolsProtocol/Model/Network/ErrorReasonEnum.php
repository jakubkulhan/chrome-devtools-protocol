<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Network level fetch failure reason.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ErrorReasonEnum
{
	public const FAILED = 'Failed';
	public const ABORTED = 'Aborted';
	public const TIMED_OUT = 'TimedOut';
	public const ACCESS_DENIED = 'AccessDenied';
	public const CONNECTION_CLOSED = 'ConnectionClosed';
	public const CONNECTION_RESET = 'ConnectionReset';
	public const CONNECTION_REFUSED = 'ConnectionRefused';
	public const CONNECTION_ABORTED = 'ConnectionAborted';
	public const CONNECTION_FAILED = 'ConnectionFailed';
	public const NAME_NOT_RESOLVED = 'NameNotResolved';
	public const INTERNET_DISCONNECTED = 'InternetDisconnected';
	public const ADDRESS_UNREACHABLE = 'AddressUnreachable';
	public const BLOCKED_BY_CLIENT = 'BlockedByClient';
	public const BLOCKED_BY_RESPONSE = 'BlockedByResponse';
}
