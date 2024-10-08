<?php

namespace ChromeDevtoolsProtocol\Model\SystemInfo;

/**
 * Describes the width and height dimensions of an entity.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Size implements \JsonSerializable
{
	/**
	 * Width in pixels.
	 *
	 * @var int
	 */
	public $width;

	/**
	 * Height in pixels.
	 *
	 * @var int
	 */
	public $height;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->width)) {
			$instance->width = (int)$data->width;
		}
		if (isset($data->height)) {
			$instance->height = (int)$data->height;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->width !== null) {
			$data->width = $this->width;
		}
		if ($this->height !== null) {
			$data->height = $this->height;
		}
		return $data;
	}
}
