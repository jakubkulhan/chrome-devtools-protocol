<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Model\DOM\RGBA;

/**
 * Style information for drawing a box.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BoxStyle implements \JsonSerializable
{
	/**
	 * The background color for the box (default: transparent)
	 *
	 * @var RGBA|null
	 */
	public $fillColor;

	/**
	 * The hatching color for the box (default: transparent)
	 *
	 * @var RGBA|null
	 */
	public $hatchColor;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->fillColor)) {
			$instance->fillColor = RGBA::fromJson($data->fillColor);
		}
		if (isset($data->hatchColor)) {
			$instance->hatchColor = RGBA::fromJson($data->hatchColor);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->fillColor !== null) {
			$data->fillColor = $this->fillColor->jsonSerialize();
		}
		if ($this->hatchColor !== null) {
			$data->hatchColor = $this->hatchColor->jsonSerialize();
		}
		return $data;
	}
}
