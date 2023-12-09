<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.streamResourceContent command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StreamResourceContentRequest implements \JsonSerializable
{
	/**
	 * Identifier of the request to stream.
	 *
	 * @var string
	 */
	public $requestId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return StreamResourceContentRequestBuilder
	 */
	public static function builder(): StreamResourceContentRequestBuilder
	{
		return new StreamResourceContentRequestBuilder();
	}
}
