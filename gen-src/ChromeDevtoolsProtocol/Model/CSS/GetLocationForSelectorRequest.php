<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.getLocationForSelector command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetLocationForSelectorRequest implements \JsonSerializable
{
	/** @var string */
	public $styleSheetId;

	/** @var string */
	public $selectorText;


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
		if (isset($data->selectorText)) {
			$instance->selectorText = (string)$data->selectorText;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->styleSheetId !== null) {
			$data->styleSheetId = $this->styleSheetId;
		}
		if ($this->selectorText !== null) {
			$data->selectorText = $this->selectorText;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetLocationForSelectorRequestBuilder
	 */
	public static function builder(): GetLocationForSelectorRequestBuilder
	{
		return new GetLocationForSelectorRequestBuilder();
	}
}
