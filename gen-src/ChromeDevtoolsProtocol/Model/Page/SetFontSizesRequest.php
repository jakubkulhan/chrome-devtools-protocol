<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.setFontSizes command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetFontSizesRequest implements \JsonSerializable
{
	/**
	 * Specifies font sizes to set. If a font size is not specified, it won't be changed.
	 *
	 * @var FontSizes
	 */
	public $fontSizes;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->fontSizes)) {
			$instance->fontSizes = FontSizes::fromJson($data->fontSizes);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->fontSizes !== null) {
			$data->fontSizes = $this->fontSizes->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetFontSizesRequestBuilder
	 */
	public static function builder(): SetFontSizesRequestBuilder
	{
		return new SetFontSizesRequestBuilder();
	}
}
