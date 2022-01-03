<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.getAttributes command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAttributesRequest implements \JsonSerializable
{
	/**
	 * Id of the node to retrieve attibutes for.
	 *
	 * @var int
	 */
	public $nodeId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetAttributesRequestBuilder
	 */
	public static function builder(): GetAttributesRequestBuilder
	{
		return new GetAttributesRequestBuilder();
	}
}
