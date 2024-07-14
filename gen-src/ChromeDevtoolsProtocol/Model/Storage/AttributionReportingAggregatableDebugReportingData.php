<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionReportingAggregatableDebugReportingData.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingAggregatableDebugReportingData implements \JsonSerializable
{
	/** @var string */
	public $keyPiece;

	/**
	 * number instead of integer because not all uint32 can be represented by int
	 *
	 * @var int|float
	 */
	public $value;

	/** @var string[] */
	public $types;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->keyPiece)) {
			$instance->keyPiece = (string)$data->keyPiece;
		}
		if (isset($data->value)) {
			$instance->value = $data->value;
		}
		if (isset($data->types)) {
			$instance->types = [];
			foreach ($data->types as $item) {
				$instance->types[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->keyPiece !== null) {
			$data->keyPiece = $this->keyPiece;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		if ($this->types !== null) {
			$data->types = [];
			foreach ($this->types as $item) {
				$data->types[] = $item;
			}
		}
		return $data;
	}
}
