<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS keyframe rule representation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSKeyframeRule implements \JsonSerializable
{
	/**
	 * The css style sheet identifier (absent for user agent stylesheet and user-specified stylesheet rules) this rule came from.
	 *
	 * @var string
	 */
	public $styleSheetId;

	/**
	 * Parent stylesheet's origin.
	 *
	 * @var string
	 */
	public $origin;

	/**
	 * Associated key text.
	 *
	 * @var Value
	 */
	public $keyText;

	/**
	 * Associated style declaration.
	 *
	 * @var CSSStyle
	 */
	public $style;


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
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		if (isset($data->keyText)) {
			$instance->keyText = Value::fromJson($data->keyText);
		}
		if (isset($data->style)) {
			$instance->style = CSSStyle::fromJson($data->style);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->styleSheetId !== null) {
			$data->styleSheetId = $this->styleSheetId;
		}
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->keyText !== null) {
			$data->keyText = $this->keyText->jsonSerialize();
		}
		if ($this->style !== null) {
			$data->style = $this->style->jsonSerialize();
		}
		return $data;
	}
}
