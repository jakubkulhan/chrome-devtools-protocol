<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Fired whenever an active document stylesheet is removed.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StyleSheetRemovedEvent implements \JsonSerializable
{
	/**
	 * Identifier of the removed stylesheet.
	 *
	 * @var string
	 */
	public $styleSheetId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->styleSheetId)) {
			$instance->styleSheetId = (string)$data->styleSheetId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->styleSheetId !== null) {
			$data->styleSheetId = $this->styleSheetId;
		}
		return $data;
	}
}
