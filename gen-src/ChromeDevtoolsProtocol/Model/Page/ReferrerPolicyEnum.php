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
	const NO_REFERRER = 'noReferrer';
	const NO_REFERRER_WHEN_DOWNGRADE = 'noReferrerWhenDowngrade';
	const ORIGIN = 'origin';
	const ORIGIN_WHEN_CROSS_ORIGIN = 'originWhenCrossOrigin';
	const SAME_ORIGIN = 'sameOrigin';
	const STRICT_ORIGIN = 'strictOrigin';
	const STRICT_ORIGIN_WHEN_CROSS_ORIGIN = 'strictOriginWhenCrossOrigin';
	const UNSAFE_URL = 'unsafeUrl';
}
