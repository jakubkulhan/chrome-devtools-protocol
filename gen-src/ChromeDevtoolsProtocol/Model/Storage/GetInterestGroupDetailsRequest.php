<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.getInterestGroupDetails command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetInterestGroupDetailsRequest implements \JsonSerializable
{
	/** @var string */
	public $ownerOrigin;

	/** @var string */
	public $name;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->ownerOrigin)) {
			$instance->ownerOrigin = (string)$data->ownerOrigin;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->ownerOrigin !== null) {
			$data->ownerOrigin = $this->ownerOrigin;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetInterestGroupDetailsRequestBuilder
	 */
	public static function builder(): GetInterestGroupDetailsRequestBuilder
	{
		return new GetInterestGroupDetailsRequestBuilder();
	}
}
