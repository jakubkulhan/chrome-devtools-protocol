<?php
namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS rule representation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSRule implements \JsonSerializable
{
	/**
	 * The css style sheet identifier (absent for user agent stylesheet and user-specified stylesheet rules) this rule came from.
	 *
	 * @var string
	 */
	public $styleSheetId;

	/**
	 * Rule selector data.
	 *
	 * @var SelectorList
	 */
	public $selectorList;

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
	 * Media list array (for rules involving media queries). The array enumerates media queries starting with the innermost one, going outwards.
	 *
	 * @var CSSMedia[]|null
	 */
	public $media;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->styleSheetId)) {
			$instance->styleSheetId = (string)$data->styleSheetId;
		}
		if (isset($data->selectorList)) {
			$instance->selectorList = SelectorList::fromJson($data->selectorList);
		}
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		if (isset($data->style)) {
			$instance->style = CSSStyle::fromJson($data->style);
		}
		if (isset($data->media)) {
			$instance->media = [];
			foreach ($data->media as $item) {
				$instance->media[] = CSSMedia::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->styleSheetId !== null) {
			$data->styleSheetId = $this->styleSheetId;
		}
		if ($this->selectorList !== null) {
			$data->selectorList = $this->selectorList->jsonSerialize();
		}
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->style !== null) {
			$data->style = $this->style->jsonSerialize();
		}
		if ($this->media !== null) {
			$data->media = [];
			foreach ($this->media as $item) {
				$data->media[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
