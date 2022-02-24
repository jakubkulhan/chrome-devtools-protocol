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

	/**
	 * Container query list array (for rules involving container queries). The array enumerates container queries starting with the innermost one, going outwards.
	 *
	 * @var CSSContainerQuery[]|null
	 */
	public $containerQueries;

	/**
	 * @supports CSS at-rule array. The array enumerates @supports at-rules starting with the innermost one, going outwards.
	 *
	 * @var CSSSupports[]|null
	 */
	public $supports;

	/**
	 * Cascade layer array. Contains the layer hierarchy that this rule belongs to starting with the innermost layer and going outwards.
	 *
	 * @var CSSLayer[]|null
	 */
	public $layers;


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
		if (isset($data->containerQueries)) {
			$instance->containerQueries = [];
			foreach ($data->containerQueries as $item) {
				$instance->containerQueries[] = CSSContainerQuery::fromJson($item);
			}
		}
		if (isset($data->supports)) {
			$instance->supports = [];
			foreach ($data->supports as $item) {
				$instance->supports[] = CSSSupports::fromJson($item);
			}
		}
		if (isset($data->layers)) {
			$instance->layers = [];
			foreach ($data->layers as $item) {
				$instance->layers[] = CSSLayer::fromJson($item);
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
		if ($this->containerQueries !== null) {
			$data->containerQueries = [];
			foreach ($this->containerQueries as $item) {
				$data->containerQueries[] = $item->jsonSerialize();
			}
		}
		if ($this->supports !== null) {
			$data->supports = [];
			foreach ($this->supports as $item) {
				$data->supports[] = $item->jsonSerialize();
			}
		}
		if ($this->layers !== null) {
			$data->layers = [];
			foreach ($this->layers as $item) {
				$data->layers[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
