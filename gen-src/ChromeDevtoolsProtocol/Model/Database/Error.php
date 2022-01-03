<?php

namespace ChromeDevtoolsProtocol\Model\Database;

/**
 * Database error.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Error implements \JsonSerializable
{
	/**
	 * Error message.
	 *
	 * @var string
	 */
	public $message;

	/**
	 * Error code.
	 *
	 * @var int
	 */
	public $code;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->message)) {
			$instance->message = (string)$data->message;
		}
		if (isset($data->code)) {
			$instance->code = (int)$data->code;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->message !== null) {
			$data->message = $this->message;
		}
		if ($this->code !== null) {
			$data->code = $this->code;
		}
		return $data;
	}
}
