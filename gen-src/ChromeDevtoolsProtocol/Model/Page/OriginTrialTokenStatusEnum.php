<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Origin Trial(https://www.chromium.org/blink/origin-trials) support. Status for an Origin Trial token.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class OriginTrialTokenStatusEnum
{
	const SUCCESS = 'Success';
	const NOT_SUPPORTED = 'NotSupported';
	const INSECURE = 'Insecure';
	const EXPIRED = 'Expired';
	const WRONG_ORIGIN = 'WrongOrigin';
	const INVALID_SIGNATURE = 'InvalidSignature';
	const MALFORMED = 'Malformed';
	const WRONG_VERSION = 'WrongVersion';
	const FEATURE_DISABLED = 'FeatureDisabled';
	const TOKEN_DISABLED = 'TokenDisabled';
	const FEATURE_DISABLED_FOR_USER = 'FeatureDisabledForUser';
}
