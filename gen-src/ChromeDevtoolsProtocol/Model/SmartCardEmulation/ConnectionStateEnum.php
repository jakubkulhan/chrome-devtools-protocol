<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Maps to |SCARD_*| connection state values.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ConnectionStateEnum
{
	public const ABSENT = 'absent';
	public const PRESENT = 'present';
	public const SWALLOWED = 'swallowed';
	public const POWERED = 'powered';
	public const NEGOTIABLE = 'negotiable';
	public const SPECIFIC = 'specific';
}
