<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionReportingFilterDataEntry.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingFilterDataEntry implements \JsonSerializable
{
	/** @var string */
	public $key;

	/** @var string[] */
	public $values;


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
		if (isset($data->values)) {
			$instance->values = [];
			foreach ($data->values as $item) {
				$instance->values[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->key !== null) {
			$data->key = $this->key;
		}
		if ($this->values !== null) {
			$data->values = [];
			foreach ($this->values as $item) {
				$data->values[] = $item;
			}
		}
		return $data;
	}
}
