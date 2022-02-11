<?php

namespace ChromeDevtoolsProtocol\Model\IO;

/**
 * Request for IO.close command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CloseRequest implements \JsonSerializable
{
	/**
	 * Handle of the stream to close.
	 *
	 * @var string
	 */
	public $handle;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->handle)) {
			$instance->handle = (string)$data->handle;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->handle !== null) {
			$data->handle = $this->handle;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return CloseRequestBuilder
	 */
	public static function builder(): CloseRequestBuilder
	{
		return new CloseRequestBuilder();
	}
}
