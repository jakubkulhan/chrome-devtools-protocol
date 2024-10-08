<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Screen orientation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScreenOrientation implements \JsonSerializable
{
	/**
	 * Orientation type.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Orientation angle.
	 *
	 * @var int
	 */
	public $angle;


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
		if (isset($data->angle)) {
			$instance->angle = (int)$data->angle;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->angle !== null) {
			$data->angle = $this->angle;
		}
		return $data;
	}
}
