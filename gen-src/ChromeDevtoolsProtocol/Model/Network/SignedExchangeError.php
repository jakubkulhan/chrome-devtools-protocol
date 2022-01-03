<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Information about a signed exchange response.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SignedExchangeError implements \JsonSerializable
{
	/**
	 * Error message.
	 *
	 * @var string
	 */
	public $message;

	/**
	 * The index of the signature which caused the error.
	 *
	 * @var int|null
	 */
	public $signatureIndex;

	/**
	 * The field which caused the error.
	 *
	 * @var string
	 */
	public $errorField;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->message)) {
			$instance->message = (string)$data->message;
		}
		if (isset($data->signatureIndex)) {
			$instance->signatureIndex = (int)$data->signatureIndex;
		}
		if (isset($data->errorField)) {
			$instance->errorField = (string)$data->errorField;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->message !== null) {
			$data->message = $this->message;
		}
		if ($this->signatureIndex !== null) {
			$data->signatureIndex = $this->signatureIndex;
		}
		if ($this->errorField !== null) {
			$data->errorField = $this->errorField;
		}
		return $data;
	}
}
