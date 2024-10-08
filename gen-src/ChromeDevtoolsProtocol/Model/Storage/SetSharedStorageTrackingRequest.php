<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.setSharedStorageTracking command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSharedStorageTrackingRequest implements \JsonSerializable
{
	/** @var bool */
	public $enable;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->enable)) {
			$instance->enable = (bool)$data->enable;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->enable !== null) {
			$data->enable = $this->enable;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetSharedStorageTrackingRequestBuilder
	 */
	public static function builder(): SetSharedStorageTrackingRequestBuilder
	{
		return new SetSharedStorageTrackingRequestBuilder();
	}
}
