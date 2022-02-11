<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Response to Browser.getHistograms command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetHistogramsResponse implements \JsonSerializable
{
	/**
	 * Histograms.
	 *
	 * @var Histogram[]
	 */
	public $histograms;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->histograms)) {
			$instance->histograms = [];
			foreach ($data->histograms as $item) {
				$instance->histograms[] = Histogram::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->histograms !== null) {
			$data->histograms = [];
			foreach ($this->histograms as $item) {
				$data->histograms[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
