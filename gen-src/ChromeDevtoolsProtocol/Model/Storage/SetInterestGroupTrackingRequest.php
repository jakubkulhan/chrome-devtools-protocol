<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.setInterestGroupTracking command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetInterestGroupTrackingRequest implements \JsonSerializable
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
	 * @return SetInterestGroupTrackingRequestBuilder
	 */
	public static function builder(): SetInterestGroupTrackingRequestBuilder
	{
		return new SetInterestGroupTrackingRequestBuilder();
	}
}
