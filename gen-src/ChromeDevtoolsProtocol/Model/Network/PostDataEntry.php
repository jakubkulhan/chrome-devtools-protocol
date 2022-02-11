<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Post data entry for HTTP request
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PostDataEntry implements \JsonSerializable
{
	/** @var string|null */
	public $bytes;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->bytes)) {
			$instance->bytes = (string)$data->bytes;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->bytes !== null) {
			$data->bytes = $this->bytes;
		}
		return $data;
	}
}
