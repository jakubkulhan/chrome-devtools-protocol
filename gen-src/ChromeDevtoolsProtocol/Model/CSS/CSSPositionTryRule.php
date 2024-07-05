<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS @position-try rule representation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSPositionTryRule implements \JsonSerializable
{
	/**
	 * The prelude dashed-ident name
	 *
	 * @var Value
	 */
	public $name;

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
	 * Associated style declaration.
	 *
	 * @var CSSStyle
	 */
	public $style;

	/** @var bool */
	public $active;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = Value::fromJson($data->name);
		}
		if (isset($data->styleSheetId)) {
			$instance->styleSheetId = (string)$data->styleSheetId;
		}
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		if (isset($data->style)) {
			$instance->style = CSSStyle::fromJson($data->style);
		}
		if (isset($data->active)) {
			$instance->active = (bool)$data->active;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name->jsonSerialize();
		}
		if ($this->styleSheetId !== null) {
			$data->styleSheetId = $this->styleSheetId;
		}
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->style !== null) {
			$data->style = $this->style->jsonSerialize();
		}
		if ($this->active !== null) {
			$data->active = $this->active;
		}
		return $data;
	}
}
