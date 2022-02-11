<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Response to WebAudio.getRealtimeData command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetRealtimeDataResponse implements \JsonSerializable
{
	/** @var ContextRealtimeData */
	public $realtimeData;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->realtimeData)) {
			$instance->realtimeData = ContextRealtimeData::fromJson($data->realtimeData);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->realtimeData !== null) {
			$data->realtimeData = $this->realtimeData->jsonSerialize();
		}
		return $data;
	}
}
