<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setIdleOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetIdleOverrideRequest implements \JsonSerializable
{
	/**
	 * Mock isUserActive
	 *
	 * @var bool
	 */
	public $isUserActive;

	/**
	 * Mock isScreenUnlocked
	 *
	 * @var bool
	 */
	public $isScreenUnlocked;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->isUserActive)) {
			$instance->isUserActive = (bool)$data->isUserActive;
		}
		if (isset($data->isScreenUnlocked)) {
			$instance->isScreenUnlocked = (bool)$data->isScreenUnlocked;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->isUserActive !== null) {
			$data->isUserActive = $this->isUserActive;
		}
		if ($this->isScreenUnlocked !== null) {
			$data->isScreenUnlocked = $this->isScreenUnlocked;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetIdleOverrideRequestBuilder
	 */
	public static function builder(): SetIdleOverrideRequestBuilder
	{
		return new SetIdleOverrideRequestBuilder();
	}
}
