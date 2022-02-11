<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.setFontFamilies command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetFontFamiliesRequest implements \JsonSerializable
{
	/**
	 * Specifies font families to set. If a font family is not specified, it won't be changed.
	 *
	 * @var FontFamilies
	 */
	public $fontFamilies;

	/**
	 * Specifies font families to set for individual scripts.
	 *
	 * @var ScriptFontFamilies[]|null
	 */
	public $forScripts;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->fontFamilies)) {
			$instance->fontFamilies = FontFamilies::fromJson($data->fontFamilies);
		}
		if (isset($data->forScripts)) {
			$instance->forScripts = [];
			foreach ($data->forScripts as $item) {
				$instance->forScripts[] = ScriptFontFamilies::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->fontFamilies !== null) {
			$data->fontFamilies = $this->fontFamilies->jsonSerialize();
		}
		if ($this->forScripts !== null) {
			$data->forScripts = [];
			foreach ($this->forScripts as $item) {
				$data->forScripts[] = $item->jsonSerialize();
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetFontFamiliesRequestBuilder
	 */
	public static function builder(): SetFontFamiliesRequestBuilder
	{
		return new SetFontFamiliesRequestBuilder();
	}
}
