<?php

namespace ChromeDevtoolsProtocol\Model\Performance;

/**
 * Response to Performance.getMetrics command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetMetricsResponse implements \JsonSerializable
{
	/**
	 * Current values for run-time metrics.
	 *
	 * @var Metric[]
	 */
	public $metrics;


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
		return $data;
	}
}
