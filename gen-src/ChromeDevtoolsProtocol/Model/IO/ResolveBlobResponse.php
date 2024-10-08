<?php

namespace ChromeDevtoolsProtocol\Model\IO;

/**
 * Response to IO.resolveBlob command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ResolveBlobResponse implements \JsonSerializable
{
	/**
	 * UUID of the specified Blob.
	 *
	 * @var string
	 */
	public $uuid;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->uuid)) {
			$instance->uuid = (string)$data->uuid;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->uuid !== null) {
			$data->uuid = $this->uuid;
		}
		return $data;
	}
}
