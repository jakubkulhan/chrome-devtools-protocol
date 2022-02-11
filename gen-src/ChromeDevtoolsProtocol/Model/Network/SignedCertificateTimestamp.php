<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Details of a signed certificate timestamp (SCT).
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SignedCertificateTimestamp implements \JsonSerializable
{
	/**
	 * Validation status.
	 *
	 * @var string
	 */
	public $status;

	/**
	 * Origin.
	 *
	 * @var string
	 */
	public $origin;

	/**
	 * Log name / description.
	 *
	 * @var string
	 */
	public $logDescription;

	/**
	 * Log ID.
	 *
	 * @var string
	 */
	public $logId;

	/**
	 * Issuance date. Unlike TimeSinceEpoch, this contains the number of milliseconds since January 1, 1970, UTC, not the number of seconds.
	 *
	 * @var int|float
	 */
	public $timestamp;

	/**
	 * Hash algorithm.
	 *
	 * @var string
	 */
	public $hashAlgorithm;

	/**
	 * Signature algorithm.
	 *
	 * @var string
	 */
	public $signatureAlgorithm;

	/**
	 * Signature data.
	 *
	 * @var string
	 */
	public $signatureData;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->status)) {
			$instance->status = (string)$data->status;
		}
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		if (isset($data->logDescription)) {
			$instance->logDescription = (string)$data->logDescription;
		}
		if (isset($data->logId)) {
			$instance->logId = (string)$data->logId;
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		if (isset($data->hashAlgorithm)) {
			$instance->hashAlgorithm = (string)$data->hashAlgorithm;
		}
		if (isset($data->signatureAlgorithm)) {
			$instance->signatureAlgorithm = (string)$data->signatureAlgorithm;
		}
		if (isset($data->signatureData)) {
			$instance->signatureData = (string)$data->signatureData;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->status !== null) {
			$data->status = $this->status;
		}
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->logDescription !== null) {
			$data->logDescription = $this->logDescription;
		}
		if ($this->logId !== null) {
			$data->logId = $this->logId;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		if ($this->hashAlgorithm !== null) {
			$data->hashAlgorithm = $this->hashAlgorithm;
		}
		if ($this->signatureAlgorithm !== null) {
			$data->signatureAlgorithm = $this->signatureAlgorithm;
		}
		if ($this->signatureData !== null) {
			$data->signatureData = $this->signatureData;
		}
		return $data;
	}
}
