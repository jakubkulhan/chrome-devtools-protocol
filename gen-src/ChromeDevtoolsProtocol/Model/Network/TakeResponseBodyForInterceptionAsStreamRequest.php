<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.takeResponseBodyForInterceptionAsStream command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TakeResponseBodyForInterceptionAsStreamRequest implements \JsonSerializable
{
	/** @var string */
	public $interceptionId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->interceptionId)) {
			$instance->interceptionId = (string)$data->interceptionId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->interceptionId !== null) {
			$data->interceptionId = $this->interceptionId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return TakeResponseBodyForInterceptionAsStreamRequestBuilder
	 */
	public static function builder(): TakeResponseBodyForInterceptionAsStreamRequestBuilder
	{
		return new TakeResponseBodyForInterceptionAsStreamRequestBuilder();
	}
}
