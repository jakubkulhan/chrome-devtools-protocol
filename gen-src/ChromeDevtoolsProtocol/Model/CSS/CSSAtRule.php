<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS generic @rule representation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSAtRule implements \JsonSerializable
{
	/**
	 * Type of at-rule.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Subsection of font-feature-values, if this is a subsection.
	 *
	 * @var string|null
	 */
	public $subsection;

	/**
	 * LINT.ThenChange(//third_party/blink/renderer/core/inspector/inspector_style_sheet.cc:FontVariantAlternatesFeatureType,//third_party/blink/renderer/core/inspector/inspector_css_agent.cc:FontVariantAlternatesFeatureType) Associated name, if applicable.
	 *
	 * @var Value|null
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


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->subsection)) {
			$instance->subsection = (string)$data->subsection;
		}
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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->subsection !== null) {
			$data->subsection = $this->subsection;
		}
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
		return $data;
	}
}
