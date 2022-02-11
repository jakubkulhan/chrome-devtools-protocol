<?php

namespace ChromeDevtoolsProtocol\Model\Security;

/**
 * Details about the security state of the page certificate.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CertificateSecurityState implements \JsonSerializable
{
	/**
	 * Protocol name (e.g. "TLS 1.2" or "QUIC").
	 *
	 * @var string
	 */
	public $protocol;

	/**
	 * Key Exchange used by the connection, or the empty string if not applicable.
	 *
	 * @var string
	 */
	public $keyExchange;

	/**
	 * (EC)DH group used by the connection, if applicable.
	 *
	 * @var string|null
	 */
	public $keyExchangeGroup;

	/**
	 * Cipher name.
	 *
	 * @var string
	 */
	public $cipher;

	/**
	 * TLS MAC. Note that AEAD ciphers do not have separate MACs.
	 *
	 * @var string|null
	 */
	public $mac;

	/**
	 * Page certificate.
	 *
	 * @var string[]
	 */
	public $certificate;

	/**
	 * Certificate subject name.
	 *
	 * @var string
	 */
	public $subjectName;

	/**
	 * Name of the issuing CA.
	 *
	 * @var string
	 */
	public $issuer;

	/**
	 * Certificate valid from date.
	 *
	 * @var int|float
	 */
	public $validFrom;

	/**
	 * Certificate valid to (expiration) date
	 *
	 * @var int|float
	 */
	public $validTo;

	/**
	 * The highest priority network error code, if the certificate has an error.
	 *
	 * @var string|null
	 */
	public $certificateNetworkError;

	/**
	 * True if the certificate uses a weak signature aglorithm.
	 *
	 * @var bool
	 */
	public $certificateHasWeakSignature;

	/**
	 * True if the certificate has a SHA1 signature in the chain.
	 *
	 * @var bool
	 */
	public $certificateHasSha1Signature;

	/**
	 * True if modern SSL
	 *
	 * @var bool
	 */
	public $modernSSL;

	/**
	 * True if the connection is using an obsolete SSL protocol.
	 *
	 * @var bool
	 */
	public $obsoleteSslProtocol;

	/**
	 * True if the connection is using an obsolete SSL key exchange.
	 *
	 * @var bool
	 */
	public $obsoleteSslKeyExchange;

	/**
	 * True if the connection is using an obsolete SSL cipher.
	 *
	 * @var bool
	 */
	public $obsoleteSslCipher;

	/**
	 * True if the connection is using an obsolete SSL signature.
	 *
	 * @var bool
	 */
	public $obsoleteSslSignature;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->protocol)) {
			$instance->protocol = (string)$data->protocol;
		}
		if (isset($data->keyExchange)) {
			$instance->keyExchange = (string)$data->keyExchange;
		}
		if (isset($data->keyExchangeGroup)) {
			$instance->keyExchangeGroup = (string)$data->keyExchangeGroup;
		}
		if (isset($data->cipher)) {
			$instance->cipher = (string)$data->cipher;
		}
		if (isset($data->mac)) {
			$instance->mac = (string)$data->mac;
		}
		if (isset($data->certificate)) {
			$instance->certificate = [];
			foreach ($data->certificate as $item) {
				$instance->certificate[] = (string)$item;
			}
		}
		if (isset($data->subjectName)) {
			$instance->subjectName = (string)$data->subjectName;
		}
		if (isset($data->issuer)) {
			$instance->issuer = (string)$data->issuer;
		}
		if (isset($data->validFrom)) {
			$instance->validFrom = $data->validFrom;
		}
		if (isset($data->validTo)) {
			$instance->validTo = $data->validTo;
		}
		if (isset($data->certificateNetworkError)) {
			$instance->certificateNetworkError = (string)$data->certificateNetworkError;
		}
		if (isset($data->certificateHasWeakSignature)) {
			$instance->certificateHasWeakSignature = (bool)$data->certificateHasWeakSignature;
		}
		if (isset($data->certificateHasSha1Signature)) {
			$instance->certificateHasSha1Signature = (bool)$data->certificateHasSha1Signature;
		}
		if (isset($data->modernSSL)) {
			$instance->modernSSL = (bool)$data->modernSSL;
		}
		if (isset($data->obsoleteSslProtocol)) {
			$instance->obsoleteSslProtocol = (bool)$data->obsoleteSslProtocol;
		}
		if (isset($data->obsoleteSslKeyExchange)) {
			$instance->obsoleteSslKeyExchange = (bool)$data->obsoleteSslKeyExchange;
		}
		if (isset($data->obsoleteSslCipher)) {
			$instance->obsoleteSslCipher = (bool)$data->obsoleteSslCipher;
		}
		if (isset($data->obsoleteSslSignature)) {
			$instance->obsoleteSslSignature = (bool)$data->obsoleteSslSignature;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->protocol !== null) {
			$data->protocol = $this->protocol;
		}
		if ($this->keyExchange !== null) {
			$data->keyExchange = $this->keyExchange;
		}
		if ($this->keyExchangeGroup !== null) {
			$data->keyExchangeGroup = $this->keyExchangeGroup;
		}
		if ($this->cipher !== null) {
			$data->cipher = $this->cipher;
		}
		if ($this->mac !== null) {
			$data->mac = $this->mac;
		}
		if ($this->certificate !== null) {
			$data->certificate = [];
			foreach ($this->certificate as $item) {
				$data->certificate[] = $item;
			}
		}
		if ($this->subjectName !== null) {
			$data->subjectName = $this->subjectName;
		}
		if ($this->issuer !== null) {
			$data->issuer = $this->issuer;
		}
		if ($this->validFrom !== null) {
			$data->validFrom = $this->validFrom;
		}
		if ($this->validTo !== null) {
			$data->validTo = $this->validTo;
		}
		if ($this->certificateNetworkError !== null) {
			$data->certificateNetworkError = $this->certificateNetworkError;
		}
		if ($this->certificateHasWeakSignature !== null) {
			$data->certificateHasWeakSignature = $this->certificateHasWeakSignature;
		}
		if ($this->certificateHasSha1Signature !== null) {
			$data->certificateHasSha1Signature = $this->certificateHasSha1Signature;
		}
		if ($this->modernSSL !== null) {
			$data->modernSSL = $this->modernSSL;
		}
		if ($this->obsoleteSslProtocol !== null) {
			$data->obsoleteSslProtocol = $this->obsoleteSslProtocol;
		}
		if ($this->obsoleteSslKeyExchange !== null) {
			$data->obsoleteSslKeyExchange = $this->obsoleteSslKeyExchange;
		}
		if ($this->obsoleteSslCipher !== null) {
			$data->obsoleteSslCipher = $this->obsoleteSslCipher;
		}
		if ($this->obsoleteSslSignature !== null) {
			$data->obsoleteSslSignature = $this->obsoleteSslSignature;
		}
		return $data;
	}
}
