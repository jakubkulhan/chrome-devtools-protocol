<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS style representation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSStyle implements \JsonSerializable
{
	/**
	 * The css style sheet identifier (absent for user agent stylesheet and user-specified stylesheet rules) this rule came from.
	 *
	 * @var string
	 */
	public $styleSheetId;

	/**
	 * CSS properties in the style.
	 *
	 * @var CSSProperty[]
	 */
	public $cssProperties;

	/**
	 * Computed values for all shorthands found in the style.
	 *
	 * @var ShorthandEntry[]
	 */
	public $shorthandEntries;

	/**
	 * Style declaration text (if available).
	 *
	 * @var string|null
	 */
	public $cssText;

	/**
	 * Style declaration range in the enclosing stylesheet (if available).
	 *
	 * @var SourceRange|null
	 */
	public $range;


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
		if (isset($data->cssProperties)) {
			$instance->cssProperties = [];
			foreach ($data->cssProperties as $item) {
				$instance->cssProperties[] = CSSProperty::fromJson($item);
			}
		}
		if (isset($data->shorthandEntries)) {
			$instance->shorthandEntries = [];
			foreach ($data->shorthandEntries as $item) {
				$instance->shorthandEntries[] = ShorthandEntry::fromJson($item);
			}
		}
		if (isset($data->cssText)) {
			$instance->cssText = (string)$data->cssText;
		}
		if (isset($data->range)) {
			$instance->range = SourceRange::fromJson($data->range);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->styleSheetId !== null) {
			$data->styleSheetId = $this->styleSheetId;
		}
		if ($this->cssProperties !== null) {
			$data->cssProperties = [];
			foreach ($this->cssProperties as $item) {
				$data->cssProperties[] = $item->jsonSerialize();
			}
		}
		if ($this->shorthandEntries !== null) {
			$data->shorthandEntries = [];
			foreach ($this->shorthandEntries as $item) {
				$data->shorthandEntries[] = $item->jsonSerialize();
			}
		}
		if ($this->cssText !== null) {
			$data->cssText = $this->cssText;
		}
		if ($this->range !== null) {
			$data->range = $this->range->jsonSerialize();
		}
		return $data;
	}
}
