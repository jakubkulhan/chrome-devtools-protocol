<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.requestNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestNodeRequest implements \JsonSerializable
{
	/**
	 * JavaScript object id to convert into node.
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
	 * @return RequestNodeRequestBuilder
	 */
	public static function builder(): RequestNodeRequestBuilder
	{
		return new RequestNodeRequestBuilder();
	}
}
