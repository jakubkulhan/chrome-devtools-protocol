<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Response to Browser.getHistogram command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetHistogramResponse implements \JsonSerializable
{
	/**
	 * Histogram.
	 *
	 * @var Histogram
	 */
	public $histogram;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->histogram)) {
			$instance->histogram = Histogram::fromJson($data->histogram);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->histogram !== null) {
			$data->histogram = $this->histogram->jsonSerialize();
		}
		return $data;
	}
}
