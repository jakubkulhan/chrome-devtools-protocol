<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setNavigatorOverrides command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetNavigatorOverridesRequest implements \JsonSerializable
{
	/**
	 * The platform navigator.platform should return.
	 *
	 * @var string
	 */
	public $platform;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->platform)) {
			$instance->platform = (string)$data->platform;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->platform !== null) {
			$data->platform = $this->platform;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetNavigatorOverridesRequestBuilder
	 */
	public static function builder(): SetNavigatorOverridesRequestBuilder
	{
		return new SetNavigatorOverridesRequestBuilder();
	}
}
