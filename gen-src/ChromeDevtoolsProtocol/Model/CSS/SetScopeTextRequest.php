<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.setScopeText command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetScopeTextRequest implements \JsonSerializable
{
	/** @var string */
	public $styleSheetId;

	/** @var SourceRange */
	public $range;

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
		if (isset($data->range)) {
			$instance->range = SourceRange::fromJson($data->range);
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
		if ($this->range !== null) {
			$data->range = $this->range->jsonSerialize();
		}
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetScopeTextRequestBuilder
	 */
	public static function builder(): SetScopeTextRequestBuilder
	{
		return new SetScopeTextRequestBuilder();
	}
}
