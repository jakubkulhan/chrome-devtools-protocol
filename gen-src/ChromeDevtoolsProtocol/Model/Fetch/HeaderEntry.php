<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

/**
 * Response HTTP header entry
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HeaderEntry implements \JsonSerializable
{
	/** @var string */
	public $name;

	/** @var string */
	public $value;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->value)) {
			$instance->value = (string)$data->value;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		return $data;
	}
}
