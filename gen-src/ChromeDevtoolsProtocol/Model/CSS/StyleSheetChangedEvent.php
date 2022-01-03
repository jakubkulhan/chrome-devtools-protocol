<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Fired whenever a stylesheet is changed as a result of the client operation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StyleSheetChangedEvent implements \JsonSerializable
{
	/** @var string */
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
