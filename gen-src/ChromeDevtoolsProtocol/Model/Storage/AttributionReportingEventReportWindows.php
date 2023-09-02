<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionReportingEventReportWindows.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingEventReportWindows implements \JsonSerializable
{
	/**
	 * duration in seconds
	 *
	 * @var int
	 */
	public $start;

	/**
	 * duration in seconds
	 *
	 * @var int[]
	 */
	public $ends;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->start)) {
			$instance->start = (int)$data->start;
		}
		if (isset($data->ends)) {
			$instance->ends = [];
			foreach ($data->ends as $item) {
				$instance->ends[] = (int)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->start !== null) {
			$data->start = $this->start;
		}
		if ($this->ends !== null) {
			$data->ends = [];
			foreach ($this->ends as $item) {
				$data->ends[] = $item;
			}
		}
		return $data;
	}
}
