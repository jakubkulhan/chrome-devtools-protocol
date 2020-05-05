<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Model\DOM\RGBA;

/**
 * Configuration data for the highlighting of page elements.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HighlightConfig implements \JsonSerializable
{
	/**
	 * Whether the node info tooltip should be shown (default: false).
	 *
	 * @var bool|null
	 */
	public $showInfo;

	/**
	 * Whether the node styles in the tooltip (default: false).
	 *
	 * @var bool|null
	 */
	public $showStyles;

	/**
	 * Whether the rulers should be shown (default: false).
	 *
	 * @var bool|null
	 */
	public $showRulers;

	/**
	 * Whether the extension lines from node to the rulers should be shown (default: false).
	 *
	 * @var bool|null
	 */
	public $showExtensionLines;

	/**
	 * The content box highlight fill color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $contentColor;

	/**
	 * The padding highlight fill color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $paddingColor;

	/**
	 * The border highlight fill color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $borderColor;

	/**
	 * The margin highlight fill color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $marginColor;

	/**
	 * The event target element highlight fill color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $eventTargetColor;

	/**
	 * The shape outside fill color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $shapeColor;

	/**
	 * The shape margin fill color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $shapeMarginColor;

	/**
	 * The grid layout color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $cssGridColor;

	/**
	 * The color format used to format color styles (default: hex).
	 *
	 * @var string
	 */
	public $colorFormat;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->showInfo)) {
			$instance->showInfo = (bool)$data->showInfo;
		}
		if (isset($data->showStyles)) {
			$instance->showStyles = (bool)$data->showStyles;
		}
		if (isset($data->showRulers)) {
			$instance->showRulers = (bool)$data->showRulers;
		}
		if (isset($data->showExtensionLines)) {
			$instance->showExtensionLines = (bool)$data->showExtensionLines;
		}
		if (isset($data->contentColor)) {
			$instance->contentColor = RGBA::fromJson($data->contentColor);
		}
		if (isset($data->paddingColor)) {
			$instance->paddingColor = RGBA::fromJson($data->paddingColor);
		}
		if (isset($data->borderColor)) {
			$instance->borderColor = RGBA::fromJson($data->borderColor);
		}
		if (isset($data->marginColor)) {
			$instance->marginColor = RGBA::fromJson($data->marginColor);
		}
		if (isset($data->eventTargetColor)) {
			$instance->eventTargetColor = RGBA::fromJson($data->eventTargetColor);
		}
		if (isset($data->shapeColor)) {
			$instance->shapeColor = RGBA::fromJson($data->shapeColor);
		}
		if (isset($data->shapeMarginColor)) {
			$instance->shapeMarginColor = RGBA::fromJson($data->shapeMarginColor);
		}
		if (isset($data->cssGridColor)) {
			$instance->cssGridColor = RGBA::fromJson($data->cssGridColor);
		}
		if (isset($data->colorFormat)) {
			$instance->colorFormat = (string)$data->colorFormat;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->showInfo !== null) {
			$data->showInfo = $this->showInfo;
		}
		if ($this->showStyles !== null) {
			$data->showStyles = $this->showStyles;
		}
		if ($this->showRulers !== null) {
			$data->showRulers = $this->showRulers;
		}
		if ($this->showExtensionLines !== null) {
			$data->showExtensionLines = $this->showExtensionLines;
		}
		if ($this->contentColor !== null) {
			$data->contentColor = $this->contentColor->jsonSerialize();
		}
		if ($this->paddingColor !== null) {
			$data->paddingColor = $this->paddingColor->jsonSerialize();
		}
		if ($this->borderColor !== null) {
			$data->borderColor = $this->borderColor->jsonSerialize();
		}
		if ($this->marginColor !== null) {
			$data->marginColor = $this->marginColor->jsonSerialize();
		}
		if ($this->eventTargetColor !== null) {
			$data->eventTargetColor = $this->eventTargetColor->jsonSerialize();
		}
		if ($this->shapeColor !== null) {
			$data->shapeColor = $this->shapeColor->jsonSerialize();
		}
		if ($this->shapeMarginColor !== null) {
			$data->shapeMarginColor = $this->shapeMarginColor->jsonSerialize();
		}
		if ($this->cssGridColor !== null) {
			$data->cssGridColor = $this->cssGridColor->jsonSerialize();
		}
		if ($this->colorFormat !== null) {
			$data->colorFormat = $this->colorFormat;
		}
		return $data;
	}
}
