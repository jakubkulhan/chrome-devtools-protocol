<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionReportingAggregatableValueDictEntry.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingAggregatableValueDictEntry implements \JsonSerializable
{
	/** @var string */
	public $key;

	/**
	 * number instead of integer because not all uint32 can be represented by int
	 *
	 * @var int|float
	 */
	public $value;

	/** @var string */
	public $filteringId;


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
		if (isset($data->filteringId)) {
			$instance->filteringId = (string)$data->filteringId;
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
		if ($this->filteringId !== null) {
			$data->filteringId = $this->filteringId;
		}
		return $data;
	}
}
