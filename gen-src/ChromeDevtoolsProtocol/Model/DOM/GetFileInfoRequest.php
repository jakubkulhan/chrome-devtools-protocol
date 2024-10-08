<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.getFileInfo command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetFileInfoRequest implements \JsonSerializable
{
	/**
	 * JavaScript object id of the node wrapper.
	 *
	 * @var string
	 */
	public $objectId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->objectId)) {
			$instance->objectId = (string)$data->objectId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->objectId !== null) {
			$data->objectId = $this->objectId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetFileInfoRequestBuilder
	 */
	public static function builder(): GetFileInfoRequestBuilder
	{
		return new GetFileInfoRequestBuilder();
	}
}
