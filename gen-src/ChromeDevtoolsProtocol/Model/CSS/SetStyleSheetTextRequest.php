<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.setStyleSheetText command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetStyleSheetTextRequest implements \JsonSerializable
{
	/** @var string */
	public $styleSheetId;

	/** @var string */
	public $text;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->styleSheetId)) {
			$instance->styleSheetId = (string)$data->styleSheetId;
		}
		if (isset($data->text)) {
			$instance->text = (string)$data->text;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->styleSheetId !== null) {
			$data->styleSheetId = $this->styleSheetId;
		}
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetStyleSheetTextRequestBuilder
	 */
	public static function builder(): SetStyleSheetTextRequestBuilder
	{
		return new SetStyleSheetTextRequestBuilder();
	}
}
