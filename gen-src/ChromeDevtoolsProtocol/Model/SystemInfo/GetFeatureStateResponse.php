<?php

namespace ChromeDevtoolsProtocol\Model\SystemInfo;

/**
 * Response to SystemInfo.getFeatureState command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetFeatureStateResponse implements \JsonSerializable
{
	/** @var bool */
	public $featureEnabled;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->featureEnabled)) {
			$instance->featureEnabled = (bool)$data->featureEnabled;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->featureEnabled !== null) {
			$data->featureEnabled = $this->featureEnabled;
		}
		return $data;
	}
}
