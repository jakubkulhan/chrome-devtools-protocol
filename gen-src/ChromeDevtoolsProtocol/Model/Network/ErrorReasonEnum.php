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
	const FAILED = 'Failed';
	const ABORTED = 'Aborted';
	const TIMED_OUT = 'TimedOut';
	const ACCESS_DENIED = 'AccessDenied';
	const CONNECTION_CLOSED = 'ConnectionClosed';
	const CONNECTION_RESET = 'ConnectionReset';
	const CONNECTION_REFUSED = 'ConnectionRefused';
	const CONNECTION_ABORTED = 'ConnectionAborted';
	const CONNECTION_FAILED = 'ConnectionFailed';
	const NAME_NOT_RESOLVED = 'NameNotResolved';
	const INTERNET_DISCONNECTED = 'InternetDisconnected';
	const ADDRESS_UNREACHABLE = 'AddressUnreachable';
	const BLOCKED_BY_CLIENT = 'BlockedByClient';
	const BLOCKED_BY_RESPONSE = 'BlockedByResponse';
}
