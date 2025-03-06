<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setSafeAreaInsetsOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSafeAreaInsetsOverrideRequest implements \JsonSerializable
{
	/** @var SafeAreaInsets */
	public $insets;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->insets)) {
			$instance->insets = SafeAreaInsets::fromJson($data->insets);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->insets !== null) {
			$data->insets = $this->insets->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetSafeAreaInsetsOverrideRequestBuilder
	 */
	public static function builder(): SetSafeAreaInsetsOverrideRequestBuilder
	{
		return new SetSafeAreaInsetsOverrideRequestBuilder();
	}
}
