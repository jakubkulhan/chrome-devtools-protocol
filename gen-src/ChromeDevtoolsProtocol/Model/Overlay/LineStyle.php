<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Model\DOM\RGBA;

/**
 * Style information for drawing a line.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LineStyle implements \JsonSerializable
{
	/**
	 * The color of the line (default: transparent)
	 *
	 * @var RGBA|null
	 */
	public $color;

	/**
	 * The line pattern (default: solid)
	 *
	 * @var string|null
	 */
	public $pattern;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->color)) {
			$instance->color = RGBA::fromJson($data->color);
		}
		if (isset($data->pattern)) {
			$instance->pattern = (string)$data->pattern;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->color !== null) {
			$data->color = $this->color->jsonSerialize();
		}
		if ($this->pattern !== null) {
			$data->pattern = $this->pattern;
		}
		return $data;
	}
}
