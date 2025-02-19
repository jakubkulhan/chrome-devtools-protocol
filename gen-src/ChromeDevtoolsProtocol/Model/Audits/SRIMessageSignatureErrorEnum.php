<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Values of named type Audits.SRIMessageSignatureError.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SRIMessageSignatureErrorEnum
{
	public const MISSING_SIGNATURE_HEADER = 'MissingSignatureHeader';
	public const MISSING_SIGNATURE_INPUT_HEADER = 'MissingSignatureInputHeader';
	public const INVALID_SIGNATURE_HEADER = 'InvalidSignatureHeader';
	public const INVALID_SIGNATURE_INPUT_HEADER = 'InvalidSignatureInputHeader';
	public const SIGNATURE_HEADER_VALUE_IS_NOT_BYTE_SEQUENCE = 'SignatureHeaderValueIsNotByteSequence';
	public const SIGNATURE_HEADER_VALUE_IS_PARAMETERIZED = 'SignatureHeaderValueIsParameterized';
	public const SIGNATURE_HEADER_VALUE_IS_INCORRECT_LENGTH = 'SignatureHeaderValueIsIncorrectLength';
	public const SIGNATURE_INPUT_HEADER_MISSING_LABEL = 'SignatureInputHeaderMissingLabel';
	public const SIGNATURE_INPUT_HEADER_VALUE_NOT_INNER_LIST = 'SignatureInputHeaderValueNotInnerList';
	public const SIGNATURE_INPUT_HEADER_VALUE_MISSING_COMPONENTS = 'SignatureInputHeaderValueMissingComponents';
	public const SIGNATURE_INPUT_HEADER_INVALID_COMPONENT_TYPE = 'SignatureInputHeaderInvalidComponentType';
	public const SIGNATURE_INPUT_HEADER_INVALID_COMPONENT_NAME = 'SignatureInputHeaderInvalidComponentName';
	public const SIGNATURE_INPUT_HEADER_INVALID_HEADER_COMPONENT_PARAMETER = 'SignatureInputHeaderInvalidHeaderComponentParameter';
	public const SIGNATURE_INPUT_HEADER_INVALID_DERIVED_COMPONENT_PARAMETER = 'SignatureInputHeaderInvalidDerivedComponentParameter';
	public const SIGNATURE_INPUT_HEADER_KEY_ID_LENGTH = 'SignatureInputHeaderKeyIdLength';
	public const SIGNATURE_INPUT_HEADER_INVALID_PARAMETER = 'SignatureInputHeaderInvalidParameter';
	public const SIGNATURE_INPUT_HEADER_MISSING_REQUIRED_PARAMETERS = 'SignatureInputHeaderMissingRequiredParameters';
	public const VALIDATION_FAILED_SIGNATURE_EXPIRED = 'ValidationFailedSignatureExpired';
	public const VALIDATION_FAILED_INVALID_LENGTH = 'ValidationFailedInvalidLength';
	public const VALIDATION_FAILED_SIGNATURE_MISMATCH = 'ValidationFailedSignatureMismatch';
}
