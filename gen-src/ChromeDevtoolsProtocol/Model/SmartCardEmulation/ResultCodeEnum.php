<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Indicates the PC/SC error code. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__ErrorCodes.html Microsoft: https://learn.microsoft.com/en-us/windows/win32/secauthn/authentication-return-values
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ResultCodeEnum
{
	public const SUCCESS = 'success';
	public const REMOVED_CARD = 'removed-card';
	public const RESET_CARD = 'reset-card';
	public const UNPOWERED_CARD = 'unpowered-card';
	public const UNRESPONSIVE_CARD = 'unresponsive-card';
	public const UNSUPPORTED_CARD = 'unsupported-card';
	public const READER_UNAVAILABLE = 'reader-unavailable';
	public const SHARING_VIOLATION = 'sharing-violation';
	public const NOT_TRANSACTED = 'not-transacted';
	public const NO_SMARTCARD = 'no-smartcard';
	public const PROTO_MISMATCH = 'proto-mismatch';
	public const SYSTEM_CANCELLED = 'system-cancelled';
	public const NOT_READY = 'not-ready';
	public const CANCELLED = 'cancelled';
	public const INSUFFICIENT_BUFFER = 'insufficient-buffer';
	public const INVALID_HANDLE = 'invalid-handle';
	public const INVALID_PARAMETER = 'invalid-parameter';
	public const INVALID_VALUE = 'invalid-value';
	public const NO_MEMORY = 'no-memory';
	public const TIMEOUT = 'timeout';
	public const UNKNOWN_READER = 'unknown-reader';
	public const UNSUPPORTED_FEATURE = 'unsupported-feature';
	public const NO_READERS_AVAILABLE = 'no-readers-available';
	public const SERVICE_STOPPED = 'service-stopped';
	public const NO_SERVICE = 'no-service';
	public const COMM_ERROR = 'comm-error';
	public const INTERNAL_ERROR = 'internal-error';
	public const SERVER_TOO_BUSY = 'server-too-busy';
	public const UNEXPECTED = 'unexpected';
	public const SHUTDOWN = 'shutdown';
	public const UNKNOWN_CARD = 'unknown-card';
	public const UNKNOWN = 'unknown';
}
