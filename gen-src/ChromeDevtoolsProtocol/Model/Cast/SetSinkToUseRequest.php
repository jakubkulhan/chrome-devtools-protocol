<?php

namespace ChromeDevtoolsProtocol\Model\Cast;

/**
 * Request for Cast.setSinkToUse command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSinkToUseRequest implements \JsonSerializable
{
	/** @var string */
	public $sinkName;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->sinkName)) {
			$instance->sinkName = (string)$data->sinkName;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sinkName !== null) {
			$data->sinkName = $this->sinkName;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetSinkToUseRequestBuilder
	 */
	public static function builder(): SetSinkToUseRequestBuilder
	{
		return new SetSinkToUseRequestBuilder();
	}
}
