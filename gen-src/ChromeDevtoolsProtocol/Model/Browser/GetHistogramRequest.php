<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Request for Browser.getHistogram command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetHistogramRequest implements \JsonSerializable
{
	/**
	 * Requested histogram name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * If true, retrieve delta since last call.
	 *
	 * @var bool|null
	 */
	public $delta;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->delta)) {
			$instance->delta = (bool)$data->delta;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->delta !== null) {
			$data->delta = $this->delta;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetHistogramRequestBuilder
	 */
	public static function builder(): GetHistogramRequestBuilder
	{
		return new GetHistogramRequestBuilder();
	}
}
