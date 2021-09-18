<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * The referring-policy used for the navigation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReferrerPolicyEnum
{
	public const NO_REFERRER = 'noReferrer';
	public const NO_REFERRER_WHEN_DOWNGRADE = 'noReferrerWhenDowngrade';
	public const ORIGIN = 'origin';
	public const ORIGIN_WHEN_CROSS_ORIGIN = 'originWhenCrossOrigin';
	public const SAME_ORIGIN = 'sameOrigin';
	public const STRICT_ORIGIN = 'strictOrigin';
	public const STRICT_ORIGIN_WHEN_CROSS_ORIGIN = 'strictOriginWhenCrossOrigin';
	public const UNSAFE_URL = 'unsafeUrl';
}
