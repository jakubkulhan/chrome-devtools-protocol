<?php

namespace ChromeDevtoolsProtocol\Model\Ads;

/**
 * Response to Ads.getAdMetrics command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAdMetricsResponse implements \JsonSerializable
{
	/** @var AdMetrics */
	public $metrics;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->metrics)) {
			$instance->metrics = AdMetrics::fromJson($data->metrics);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->metrics !== null) {
			$data->metrics = $this->metrics->jsonSerialize();
		}
		return $data;
	}
}
