<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Fired when a page calls screen.orientation.lock() or screen.orientation.unlock() while device emulation is enabled. This allows the DevTools frontend to update the emulated device orientation accordingly.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScreenOrientationLockChangedEvent implements \JsonSerializable
{
	/**
	 * Whether the screen orientation is currently locked.
	 *
	 * @var bool
	 */
	public $locked;

	/**
	 * The orientation lock type requested by the page. Only set when locked is true.
	 *
	 * @var ScreenOrientation|null
	 */
	public $orientation;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->locked)) {
			$instance->locked = (bool)$data->locked;
		}
		if (isset($data->orientation)) {
			$instance->orientation = ScreenOrientation::fromJson($data->orientation);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->locked !== null) {
			$data->locked = $this->locked;
		}
		if ($this->orientation !== null) {
			$data->orientation = $this->orientation->jsonSerialize();
		}
		return $data;
	}
}
