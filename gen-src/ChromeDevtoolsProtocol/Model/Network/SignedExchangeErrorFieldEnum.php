<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Field type for a signed exchange related error.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SignedExchangeErrorFieldEnum
{
	public const SIGNATURE_SIG = 'signatureSig';
	public const SIGNATURE_INTEGRITY = 'signatureIntegrity';
	public const SIGNATURE_CERT_URL = 'signatureCertUrl';
	public const SIGNATURE_CERT_SHA256 = 'signatureCertSha256';
	public const SIGNATURE_VALIDITY_URL = 'signatureValidityUrl';
	public const SIGNATURE_TIMESTAMPS = 'signatureTimestamps';
}
