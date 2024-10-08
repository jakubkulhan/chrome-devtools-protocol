<?php

namespace ChromeDevtoolsProtocol\Model\Tracing;

/**
 * Request for Tracing.recordClockSyncMarker command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RecordClockSyncMarkerRequest implements \JsonSerializable
{
	/**
	 * The ID of this clock sync marker
	 *
	 * @var string
	 */
	public $syncId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->syncId)) {
			$instance->syncId = (string)$data->syncId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->syncId !== null) {
			$data->syncId = $this->syncId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RecordClockSyncMarkerRequestBuilder
	 */
	public static function builder(): RecordClockSyncMarkerRequestBuilder
	{
		return new RecordClockSyncMarkerRequestBuilder();
	}
}
