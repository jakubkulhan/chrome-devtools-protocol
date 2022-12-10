<?php

namespace ChromeDevtoolsProtocol\Model\SystemInfo;

/**
 * Request for SystemInfo.getFeatureState command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetFeatureStateRequest implements \JsonSerializable
{
	/** @var string */
	public $featureState;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->featureState)) {
			$instance->featureState = (string)$data->featureState;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->featureState !== null) {
			$data->featureState = $this->featureState;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetFeatureStateRequestBuilder
	 */
	public static function builder(): GetFeatureStateRequestBuilder
	{
		return new GetFeatureStateRequestBuilder();
	}
}
