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
	public const SUCCESS = 'Success';
	public const NOT_SUPPORTED = 'NotSupported';
	public const INSECURE = 'Insecure';
	public const EXPIRED = 'Expired';
	public const WRONG_ORIGIN = 'WrongOrigin';
	public const INVALID_SIGNATURE = 'InvalidSignature';
	public const MALFORMED = 'Malformed';
	public const WRONG_VERSION = 'WrongVersion';
	public const FEATURE_DISABLED = 'FeatureDisabled';
	public const TOKEN_DISABLED = 'TokenDisabled';
	public const FEATURE_DISABLED_FOR_USER = 'FeatureDisabledForUser';
	public const UNKNOWN_TRIAL = 'UnknownTrial';
}
