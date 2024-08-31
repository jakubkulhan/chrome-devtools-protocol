<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionScopesData.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionScopesData implements \JsonSerializable
{
	/** @var string[] */
	public $values;

	/**
	 * number instead of integer because not all uint32 can be represented by int
	 *
	 * @var int|float
	 */
	public $limit;

	/** @var int|float */
	public $maxEventStates;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->values)) {
			$instance->values = [];
			foreach ($data->values as $item) {
				$instance->values[] = (string)$item;
			}
		}
		if (isset($data->limit)) {
			$instance->limit = $data->limit;
		}
		if (isset($data->maxEventStates)) {
			$instance->maxEventStates = $data->maxEventStates;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->values !== null) {
			$data->values = [];
			foreach ($this->values as $item) {
				$data->values[] = $item;
			}
		}
		if ($this->limit !== null) {
			$data->limit = $this->limit;
		}
		if ($this->maxEventStates !== null) {
			$data->maxEventStates = $this->maxEventStates;
		}
		return $data;
	}
}
