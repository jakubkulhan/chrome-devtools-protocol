<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.setKeyframeKey command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetKeyframeKeyRequest implements \JsonSerializable
{
	/** @var string */
	public $styleSheetId;

	/** @var SourceRange */
	public $range;

	/** @var string */
	public $keyText;


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
		if (isset($data->keyText)) {
			$instance->keyText = (string)$data->keyText;
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
		if ($this->keyText !== null) {
			$data->keyText = $this->keyText;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetKeyframeKeyRequestBuilder
	 */
	public static function builder(): SetKeyframeKeyRequestBuilder
	{
		return new SetKeyframeKeyRequestBuilder();
	}
}
