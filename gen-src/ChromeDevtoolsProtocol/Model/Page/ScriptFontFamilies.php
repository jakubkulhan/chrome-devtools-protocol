<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Font families collection for a script.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScriptFontFamilies implements \JsonSerializable
{
	/**
	 * Name of the script which these font families are defined for.
	 *
	 * @var string
	 */
	public $script;

	/**
	 * Generic font families collection for the script.
	 *
	 * @var FontFamilies
	 */
	public $fontFamilies;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->script)) {
			$instance->script = (string)$data->script;
		}
		if (isset($data->fontFamilies)) {
			$instance->fontFamilies = FontFamilies::fromJson($data->fontFamilies);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->script !== null) {
			$data->script = $this->script;
		}
		if ($this->fontFamilies !== null) {
			$data->fontFamilies = $this->fontFamilies->jsonSerialize();
		}
		return $data;
	}
}
