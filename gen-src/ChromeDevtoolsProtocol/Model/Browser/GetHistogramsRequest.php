<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Request for Browser.getHistograms command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetHistogramsRequest implements \JsonSerializable
{
	/**
	 * Requested substring in name. Only histograms which have query as a substring in their name are extracted. An empty or absent query returns all histograms.
	 *
	 * @var string|null
	 */
	public $query;

	/**
	 * If true, retrieve delta since last delta call.
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
		if (isset($data->query)) {
			$instance->query = (string)$data->query;
		}
		if (isset($data->delta)) {
			$instance->delta = (bool)$data->delta;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->query !== null) {
			$data->query = $this->query;
		}
		if ($this->delta !== null) {
			$data->delta = $this->delta;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetHistogramsRequestBuilder
	 */
	public static function builder(): GetHistogramsRequestBuilder
	{
		return new GetHistogramsRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
