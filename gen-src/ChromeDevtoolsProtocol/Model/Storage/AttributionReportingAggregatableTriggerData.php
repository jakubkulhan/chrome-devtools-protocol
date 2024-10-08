<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionReportingAggregatableTriggerData.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingAggregatableTriggerData implements \JsonSerializable
{
	/** @var string */
	public $keyPiece;

	/** @var string[] */
	public $sourceKeys;

	/** @var AttributionReportingFilterPair */
	public $filters;


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
		if (isset($data->sourceKeys)) {
			$instance->sourceKeys = [];
			foreach ($data->sourceKeys as $item) {
				$instance->sourceKeys[] = (string)$item;
			}
		}
		if (isset($data->filters)) {
			$instance->filters = AttributionReportingFilterPair::fromJson($data->filters);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->keyPiece !== null) {
			$data->keyPiece = $this->keyPiece;
		}
		if ($this->sourceKeys !== null) {
			$data->sourceKeys = [];
			foreach ($this->sourceKeys as $item) {
				$data->sourceKeys[] = $item;
			}
		}
		if ($this->filters !== null) {
			$data->filters = $this->filters->jsonSerialize();
		}
		return $data;
	}
}
