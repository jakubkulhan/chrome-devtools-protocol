<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * One of the interest groups was accessed by the associated page.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InterestGroupAccessedEvent implements \JsonSerializable
{
	/** @var int|float */
	public $accessTime;

	/** @var string */
	public $type;

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
		if (isset($data->accessTime)) {
			$instance->accessTime = $data->accessTime;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
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
		if ($this->accessTime !== null) {
			$data->accessTime = $this->accessTime;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->ownerOrigin !== null) {
			$data->ownerOrigin = $this->ownerOrigin;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		return $data;
	}
}
