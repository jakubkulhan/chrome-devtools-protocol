<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Response to Emulation.getOverriddenSensorInformation command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetOverriddenSensorInformationResponse implements \JsonSerializable
{
	/** @var int|float */
	public $requestedSamplingFrequency;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestedSamplingFrequency)) {
			$instance->requestedSamplingFrequency = $data->requestedSamplingFrequency;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestedSamplingFrequency !== null) {
			$data->requestedSamplingFrequency = $this->requestedSamplingFrequency;
		}
		return $data;
	}
}
