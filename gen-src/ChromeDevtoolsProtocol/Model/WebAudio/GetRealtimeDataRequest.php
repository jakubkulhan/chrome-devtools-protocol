<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Request for WebAudio.getRealtimeData command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetRealtimeDataRequest implements \JsonSerializable
{
	/** @var string */
	public $contextId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->contextId)) {
			$instance->contextId = (string)$data->contextId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->contextId !== null) {
			$data->contextId = $this->contextId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetRealtimeDataRequestBuilder
	 */
	public static function builder(): GetRealtimeDataRequestBuilder
	{
		return new GetRealtimeDataRequestBuilder();
	}
}
