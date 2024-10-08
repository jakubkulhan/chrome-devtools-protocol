<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.replayXHR command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReplayXHRRequest implements \JsonSerializable
{
	/**
	 * Identifier of XHR to replay.
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
	 * @return ReplayXHRRequestBuilder
	 */
	public static function builder(): ReplayXHRRequestBuilder
	{
		return new ReplayXHRRequestBuilder();
	}
}
