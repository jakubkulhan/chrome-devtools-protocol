<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.getOverriddenSensorInformation command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetOverriddenSensorInformationRequest implements \JsonSerializable
{
	/** @var string */
	public $type;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetOverriddenSensorInformationRequestBuilder
	 */
	public static function builder(): GetOverriddenSensorInformationRequestBuilder
	{
		return new GetOverriddenSensorInformationRequestBuilder();
	}
}
