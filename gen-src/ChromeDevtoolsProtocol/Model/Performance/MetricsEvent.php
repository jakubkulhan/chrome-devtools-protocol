<?php

namespace ChromeDevtoolsProtocol\Model\Performance;

/**
 * Current values of the metrics.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class MetricsEvent implements \JsonSerializable
{
	/**
	 * Current values of the metrics.
	 *
	 * @var Metric[]
	 */
	public $metrics;

	/**
	 * Timestamp title.
	 *
	 * @var string
	 */
	public $title;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->metrics)) {
			$instance->metrics = [];
			foreach ($data->metrics as $item) {
				$instance->metrics[] = Metric::fromJson($item);
			}
		}
		if (isset($data->title)) {
			$instance->title = (string)$data->title;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->metrics !== null) {
			$data->metrics = [];
			foreach ($this->metrics as $item) {
				$data->metrics[] = $item->jsonSerialize();
			}
		}
		if ($this->title !== null) {
			$data->title = $this->title;
		}
		return $data;
	}
}
