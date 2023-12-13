<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionReportingAggregatableValueEntry.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingAggregatableValueEntry implements \JsonSerializable
{
	/** @var string */
	public $key;

	/**
	 * number instead of integer because not all uint32 can be represented by int
	 *
	 * @var int|float
	 */
	public $value;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->key)) {
			$instance->key = (string)$data->key;
		}
		if (isset($data->value)) {
			$instance->value = $data->value;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->key !== null) {
			$data->key = $this->key;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		return $data;
	}
}
