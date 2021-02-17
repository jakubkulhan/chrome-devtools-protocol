<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Represents the source scheme of the origin that originally set the cookie. A value of "Unset" allows protocol clients to emulate legacy cookie scope for the scheme. This is a temporary ability and it will be removed in the future.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CookieSourceSchemeEnum
{
	const UNSET = 'Unset';
	const NON_SECURE = 'NonSecure';
	const SECURE = 'Secure';
}
