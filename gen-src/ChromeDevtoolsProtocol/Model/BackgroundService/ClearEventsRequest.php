<?php

namespace ChromeDevtoolsProtocol\Model\BackgroundService;

/**
 * Request for BackgroundService.clearEvents command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ClearEventsRequest implements \JsonSerializable
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


	public function jsonSerialize(): mixed
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
	 * @return ClearEventsRequestBuilder
	 */
	public static function builder(): ClearEventsRequestBuilder
	{
		return new ClearEventsRequestBuilder();
	}
}
