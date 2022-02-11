<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Model\DOM\RGBA;

/**
 * Configuration data for drawing the source order of an elements children.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SourceOrderConfig implements \JsonSerializable
{
	/**
	 * the color to outline the givent element in.
	 *
	 * @var RGBA
	 */
	public $parentOutlineColor;

	/**
	 * the color to outline the child elements in.
	 *
	 * @var RGBA
	 */
	public $childOutlineColor;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->parentOutlineColor)) {
			$instance->parentOutlineColor = RGBA::fromJson($data->parentOutlineColor);
		}
		if (isset($data->childOutlineColor)) {
			$instance->childOutlineColor = RGBA::fromJson($data->childOutlineColor);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->parentOutlineColor !== null) {
			$data->parentOutlineColor = $this->parentOutlineColor->jsonSerialize();
		}
		if ($this->childOutlineColor !== null) {
			$data->childOutlineColor = $this->childOutlineColor->jsonSerialize();
		}
		return $data;
	}
}
