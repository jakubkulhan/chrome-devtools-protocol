<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.setStorageBucketTracking command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetStorageBucketTrackingRequest implements \JsonSerializable
{
	/** @var string */
	public $storageKey;

	/** @var bool */
	public $enable;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->storageKey)) {
			$instance->storageKey = (string)$data->storageKey;
		}
		if (isset($data->enable)) {
			$instance->enable = (bool)$data->enable;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->storageKey !== null) {
			$data->storageKey = $this->storageKey;
		}
		if ($this->enable !== null) {
			$data->enable = $this->enable;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetStorageBucketTrackingRequestBuilder
	 */
	public static function builder(): SetStorageBucketTrackingRequestBuilder
	{
		return new SetStorageBucketTrackingRequestBuilder();
	}
}
