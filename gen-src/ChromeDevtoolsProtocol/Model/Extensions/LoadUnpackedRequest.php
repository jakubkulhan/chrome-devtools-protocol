<?php

namespace ChromeDevtoolsProtocol\Model\Extensions;

/**
 * Request for Extensions.loadUnpacked command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LoadUnpackedRequest implements \JsonSerializable
{
	/**
	 * Absolute file path.
	 *
	 * @var string
	 */
	public $path;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->path)) {
			$instance->path = (string)$data->path;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->path !== null) {
			$data->path = $this->path;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return LoadUnpackedRequestBuilder
	 */
	public static function builder(): LoadUnpackedRequestBuilder
	{
		return new LoadUnpackedRequestBuilder();
	}
}
