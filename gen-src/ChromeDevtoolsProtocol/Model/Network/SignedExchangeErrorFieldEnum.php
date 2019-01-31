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
	const SIGNATURE_SIG = 'signatureSig';
	const SIGNATURE_INTEGRITY = 'signatureIntegrity';
	const SIGNATURE_CERT_URL = 'signatureCertUrl';
	const SIGNATURE_CERT_SHA256 = 'signatureCertSha256';
	const SIGNATURE_VALIDITY_URL = 'signatureValidityUrl';
	const SIGNATURE_TIMESTAMPS = 'signatureTimestamps';
}
