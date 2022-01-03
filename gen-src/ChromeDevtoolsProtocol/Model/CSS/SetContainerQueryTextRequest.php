<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.setContainerQueryText command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetContainerQueryTextRequest implements \JsonSerializable
{
	/** @var string */
	public $styleSheetId;

	/** @var SourceRange */
	public $range;

	/** @var string */
	public $text;


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


	public function jsonSerialize(): mixed
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
	 * @return SetContainerQueryTextRequestBuilder
	 */
	public static function builder(): SetContainerQueryTextRequestBuilder
	{
		return new SetContainerQueryTextRequestBuilder();
	}
}
