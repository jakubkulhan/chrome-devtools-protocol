<?php

namespace ChromeDevtoolsProtocol\Model\BackgroundService;

/**
 * Request for BackgroundService.enable command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequest implements \JsonSerializable
{
	/** @var string */
	public $service;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->service)) {
			$instance->service = (string)$data->service;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->service !== null) {
			$data->service = $this->service;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return EnableRequestBuilder
	 */
	public static function builder(): EnableRequestBuilder
	{
		return new EnableRequestBuilder();
	}
}
