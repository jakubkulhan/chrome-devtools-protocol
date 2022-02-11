<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Information about amount of glyphs that were rendered with given font.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PlatformFontUsage implements \JsonSerializable
{
	/**
	 * Font's family name reported by platform.
	 *
	 * @var string
	 */
	public $familyName;

	/**
	 * Indicates if the font was downloaded or resolved locally.
	 *
	 * @var bool
	 */
	public $isCustomFont;

	/**
	 * Amount of glyphs that were rendered with this font.
	 *
	 * @var int|float
	 */
	public $glyphCount;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->familyName)) {
			$instance->familyName = (string)$data->familyName;
		}
		if (isset($data->isCustomFont)) {
			$instance->isCustomFont = (bool)$data->isCustomFont;
		}
		if (isset($data->glyphCount)) {
			$instance->glyphCount = $data->glyphCount;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->familyName !== null) {
			$data->familyName = $this->familyName;
		}
		if ($this->isCustomFont !== null) {
			$data->isCustomFont = $this->isCustomFont;
		}
		if ($this->glyphCount !== null) {
			$data->glyphCount = $this->glyphCount;
		}
		return $data;
	}
}
