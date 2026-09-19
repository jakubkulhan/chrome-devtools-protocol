<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Model\DOM\RGBA;

/**
 * Configuration for Inset-Modified Containing Block (IMCB) and CSS Anchor Positioning highlight.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ImcbHighlightConfig implements \JsonSerializable
{
	/**
	 * Border color for the Inset-Modified Containing Block (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $imcbBorderColor;

	/**
	 * Background fill color for the Inset-Modified Containing Block (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $imcbBackgroundColor;

	/**
	 * Fill color for the inset modifiers area (difference between CB and IMCB).
	 *
	 * @var RGBA|null
	 */
	public $insetsBackgroundColor;

	/**
	 * Hatch color for the inset modifiers area.
	 *
	 * @var RGBA|null
	 */
	public $insetsHatchColor;

	/**
	 * Border color for the referenced target anchor element(s) (when element is anchor-positioned).
	 *
	 * @var RGBA|null
	 */
	public $anchorBorderColor;

	/**
	 * Background fill color for the referenced target anchor element(s) (when element is anchor-positioned).
	 *
	 * @var RGBA|null
	 */
	public $anchorBackgroundColor;

	/**
	 * Whether to render the 3x3 position-area grid lines when position-area is used.
	 *
	 * @var bool|null
	 */
	public $showPositionAreaGrid;

	/**
	 * Line color for the 3x3 position-area grid lines.
	 *
	 * @var RGBA|null
	 */
	public $positionAreaGridLineColor;

	/**
	 * Fill color for the active region within the position-area grid.
	 *
	 * @var RGBA|null
	 */
	public $positionAreaActiveRegionColor;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->imcbBorderColor)) {
			$instance->imcbBorderColor = RGBA::fromJson($data->imcbBorderColor);
		}
		if (isset($data->imcbBackgroundColor)) {
			$instance->imcbBackgroundColor = RGBA::fromJson($data->imcbBackgroundColor);
		}
		if (isset($data->insetsBackgroundColor)) {
			$instance->insetsBackgroundColor = RGBA::fromJson($data->insetsBackgroundColor);
		}
		if (isset($data->insetsHatchColor)) {
			$instance->insetsHatchColor = RGBA::fromJson($data->insetsHatchColor);
		}
		if (isset($data->anchorBorderColor)) {
			$instance->anchorBorderColor = RGBA::fromJson($data->anchorBorderColor);
		}
		if (isset($data->anchorBackgroundColor)) {
			$instance->anchorBackgroundColor = RGBA::fromJson($data->anchorBackgroundColor);
		}
		if (isset($data->showPositionAreaGrid)) {
			$instance->showPositionAreaGrid = (bool)$data->showPositionAreaGrid;
		}
		if (isset($data->positionAreaGridLineColor)) {
			$instance->positionAreaGridLineColor = RGBA::fromJson($data->positionAreaGridLineColor);
		}
		if (isset($data->positionAreaActiveRegionColor)) {
			$instance->positionAreaActiveRegionColor = RGBA::fromJson($data->positionAreaActiveRegionColor);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->imcbBorderColor !== null) {
			$data->imcbBorderColor = $this->imcbBorderColor->jsonSerialize();
		}
		if ($this->imcbBackgroundColor !== null) {
			$data->imcbBackgroundColor = $this->imcbBackgroundColor->jsonSerialize();
		}
		if ($this->insetsBackgroundColor !== null) {
			$data->insetsBackgroundColor = $this->insetsBackgroundColor->jsonSerialize();
		}
		if ($this->insetsHatchColor !== null) {
			$data->insetsHatchColor = $this->insetsHatchColor->jsonSerialize();
		}
		if ($this->anchorBorderColor !== null) {
			$data->anchorBorderColor = $this->anchorBorderColor->jsonSerialize();
		}
		if ($this->anchorBackgroundColor !== null) {
			$data->anchorBackgroundColor = $this->anchorBackgroundColor->jsonSerialize();
		}
		if ($this->showPositionAreaGrid !== null) {
			$data->showPositionAreaGrid = $this->showPositionAreaGrid;
		}
		if ($this->positionAreaGridLineColor !== null) {
			$data->positionAreaGridLineColor = $this->positionAreaGridLineColor->jsonSerialize();
		}
		if ($this->positionAreaActiveRegionColor !== null) {
			$data->positionAreaActiveRegionColor = $this->positionAreaActiveRegionColor->jsonSerialize();
		}
		return $data;
	}
}
