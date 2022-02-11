<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Request for Target.setDiscoverTargets command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDiscoverTargetsRequest implements \JsonSerializable
{
	/**
	 * Whether to discover available targets.
	 *
	 * @var bool
	 */
	public $discover;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->discover)) {
			$instance->discover = (bool)$data->discover;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->discover !== null) {
			$data->discover = $this->discover;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetDiscoverTargetsRequestBuilder
	 */
	public static function builder(): SetDiscoverTargetsRequestBuilder
	{
		return new SetDiscoverTargetsRequestBuilder();
	}
}
