<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Security details about a request.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SecurityDetails implements \JsonSerializable
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
	 * Certificate ID value.
	 *
	 * @var int
	 */
	public $certificateId;

	/**
	 * Certificate subject name.
	 *
	 * @var string
	 */
	public $subjectName;

	/**
	 * Subject Alternative Name (SAN) DNS names and IP addresses.
	 *
	 * @var string[]
	 */
	public $sanList;

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
	 * List of signed certificate timestamps (SCTs).
	 *
	 * @var SignedCertificateTimestamp[]
	 */
	public $signedCertificateTimestampList;

	/**
	 * Whether the request complied with Certificate Transparency policy
	 *
	 * @var string
	 */
	public $certificateTransparencyCompliance;


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
		if (isset($data->certificateId)) {
			$instance->certificateId = (int)$data->certificateId;
		}
		if (isset($data->subjectName)) {
			$instance->subjectName = (string)$data->subjectName;
		}
		if (isset($data->sanList)) {
			$instance->sanList = [];
			foreach ($data->sanList as $item) {
				$instance->sanList[] = (string)$item;
			}
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
		if (isset($data->signedCertificateTimestampList)) {
			$instance->signedCertificateTimestampList = [];
			foreach ($data->signedCertificateTimestampList as $item) {
				$instance->signedCertificateTimestampList[] = SignedCertificateTimestamp::fromJson($item);
			}
		}
		if (isset($data->certificateTransparencyCompliance)) {
			$instance->certificateTransparencyCompliance = (string)$data->certificateTransparencyCompliance;
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
		if ($this->certificateId !== null) {
			$data->certificateId = $this->certificateId;
		}
		if ($this->subjectName !== null) {
			$data->subjectName = $this->subjectName;
		}
		if ($this->sanList !== null) {
			$data->sanList = [];
			foreach ($this->sanList as $item) {
				$data->sanList[] = $item;
			}
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
		if ($this->signedCertificateTimestampList !== null) {
			$data->signedCertificateTimestampList = [];
			foreach ($this->signedCertificateTimestampList as $item) {
				$data->signedCertificateTimestampList[] = $item->jsonSerialize();
			}
		}
		if ($this->certificateTransparencyCompliance !== null) {
			$data->certificateTransparencyCompliance = $this->certificateTransparencyCompliance;
		}
		return $data;
	}
}
