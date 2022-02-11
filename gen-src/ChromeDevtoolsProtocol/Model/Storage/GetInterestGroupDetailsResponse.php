<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Response to Storage.getInterestGroupDetails command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetInterestGroupDetailsResponse implements \JsonSerializable
{
	/** @var InterestGroupDetails */
	public $details;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->details)) {
			$instance->details = InterestGroupDetails::fromJson($data->details);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->details !== null) {
			$data->details = $this->details->jsonSerialize();
		}
		return $data;
	}
}
