<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired exactly once for each Trust Token operation. Depending on the type of the operation and whether the operation succeeded or failed, the event is fired before the corresponding request was sent or after the response was received.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TrustTokenOperationDoneEvent implements \JsonSerializable
{
	/**
	 * Detailed success or error status of the operation. 'AlreadyExists' also signifies a successful operation, as the result of the operation already exists und thus, the operation was abort preemptively (e.g. a cache hit).
	 *
	 * @var string
	 */
	public $status;

	/** @var string */
	public $type;

	/** @var string */
	public $requestId;

	/**
	 * Top level origin. The context in which the operation was attempted.
	 *
	 * @var string|null
	 */
	public $topLevelOrigin;

	/**
	 * Origin of the issuer in case of a "Issuance" or "Redemption" operation.
	 *
	 * @var string|null
	 */
	public $issuerOrigin;

	/**
	 * The number of obtained Trust Tokens on a successful "Issuance" operation.
	 *
	 * @var int|null
	 */
	public $issuedTokenCount;


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
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->topLevelOrigin)) {
			$instance->topLevelOrigin = (string)$data->topLevelOrigin;
		}
		if (isset($data->issuerOrigin)) {
			$instance->issuerOrigin = (string)$data->issuerOrigin;
		}
		if (isset($data->issuedTokenCount)) {
			$instance->issuedTokenCount = (int)$data->issuedTokenCount;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->status !== null) {
			$data->status = $this->status;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->topLevelOrigin !== null) {
			$data->topLevelOrigin = $this->topLevelOrigin;
		}
		if ($this->issuerOrigin !== null) {
			$data->issuerOrigin = $this->issuerOrigin;
		}
		if ($this->issuedTokenCount !== null) {
			$data->issuedTokenCount = $this->issuedTokenCount;
		}
		return $data;
	}
}
