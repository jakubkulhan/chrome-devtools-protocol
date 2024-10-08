<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Model\DOM\RGBA;

/**
 * Configuration data for the highlighting of Grid elements.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GridHighlightConfig implements \JsonSerializable
{
	/**
	 * Whether the extension lines from grid cells to the rulers should be shown (default: false).
	 *
	 * @var bool|null
	 */
	public $showGridExtensionLines;

	/**
	 * Show Positive line number labels (default: false).
	 *
	 * @var bool|null
	 */
	public $showPositiveLineNumbers;

	/**
	 * Show Negative line number labels (default: false).
	 *
	 * @var bool|null
	 */
	public $showNegativeLineNumbers;

	/**
	 * Show area name labels (default: false).
	 *
	 * @var bool|null
	 */
	public $showAreaNames;

	/**
	 * Show line name labels (default: false).
	 *
	 * @var bool|null
	 */
	public $showLineNames;

	/**
	 * Show track size labels (default: false).
	 *
	 * @var bool|null
	 */
	public $showTrackSizes;

	/**
	 * The grid container border highlight color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $gridBorderColor;

	/**
	 * The cell border color (default: transparent). Deprecated, please use rowLineColor and columnLineColor instead.
	 *
	 * @var RGBA|null
	 */
	public $cellBorderColor;

	/**
	 * The row line color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $rowLineColor;

	/**
	 * The column line color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $columnLineColor;

	/**
	 * Whether the grid border is dashed (default: false).
	 *
	 * @var bool|null
	 */
	public $gridBorderDash;

	/**
	 * Whether the cell border is dashed (default: false). Deprecated, please us rowLineDash and columnLineDash instead.
	 *
	 * @var bool|null
	 */
	public $cellBorderDash;

	/**
	 * Whether row lines are dashed (default: false).
	 *
	 * @var bool|null
	 */
	public $rowLineDash;

	/**
	 * Whether column lines are dashed (default: false).
	 *
	 * @var bool|null
	 */
	public $columnLineDash;

	/**
	 * The row gap highlight fill color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $rowGapColor;

	/**
	 * The row gap hatching fill color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $rowHatchColor;

	/**
	 * The column gap highlight fill color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $columnGapColor;

	/**
	 * The column gap hatching fill color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $columnHatchColor;

	/**
	 * The named grid areas border color (Default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $areaBorderColor;

	/**
	 * The grid container background color (Default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $gridBackgroundColor;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->showGridExtensionLines)) {
			$instance->showGridExtensionLines = (bool)$data->showGridExtensionLines;
		}
		if (isset($data->showPositiveLineNumbers)) {
			$instance->showPositiveLineNumbers = (bool)$data->showPositiveLineNumbers;
		}
		if (isset($data->showNegativeLineNumbers)) {
			$instance->showNegativeLineNumbers = (bool)$data->showNegativeLineNumbers;
		}
		if (isset($data->showAreaNames)) {
			$instance->showAreaNames = (bool)$data->showAreaNames;
		}
		if (isset($data->showLineNames)) {
			$instance->showLineNames = (bool)$data->showLineNames;
		}
		if (isset($data->showTrackSizes)) {
			$instance->showTrackSizes = (bool)$data->showTrackSizes;
		}
		if (isset($data->gridBorderColor)) {
			$instance->gridBorderColor = RGBA::fromJson($data->gridBorderColor);
		}
		if (isset($data->cellBorderColor)) {
			$instance->cellBorderColor = RGBA::fromJson($data->cellBorderColor);
		}
		if (isset($data->rowLineColor)) {
			$instance->rowLineColor = RGBA::fromJson($data->rowLineColor);
		}
		if (isset($data->columnLineColor)) {
			$instance->columnLineColor = RGBA::fromJson($data->columnLineColor);
		}
		if (isset($data->gridBorderDash)) {
			$instance->gridBorderDash = (bool)$data->gridBorderDash;
		}
		if (isset($data->cellBorderDash)) {
			$instance->cellBorderDash = (bool)$data->cellBorderDash;
		}
		if (isset($data->rowLineDash)) {
			$instance->rowLineDash = (bool)$data->rowLineDash;
		}
		if (isset($data->columnLineDash)) {
			$instance->columnLineDash = (bool)$data->columnLineDash;
		}
		if (isset($data->rowGapColor)) {
			$instance->rowGapColor = RGBA::fromJson($data->rowGapColor);
		}
		if (isset($data->rowHatchColor)) {
			$instance->rowHatchColor = RGBA::fromJson($data->rowHatchColor);
		}
		if (isset($data->columnGapColor)) {
			$instance->columnGapColor = RGBA::fromJson($data->columnGapColor);
		}
		if (isset($data->columnHatchColor)) {
			$instance->columnHatchColor = RGBA::fromJson($data->columnHatchColor);
		}
		if (isset($data->areaBorderColor)) {
			$instance->areaBorderColor = RGBA::fromJson($data->areaBorderColor);
		}
		if (isset($data->gridBackgroundColor)) {
			$instance->gridBackgroundColor = RGBA::fromJson($data->gridBackgroundColor);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->showGridExtensionLines !== null) {
			$data->showGridExtensionLines = $this->showGridExtensionLines;
		}
		if ($this->showPositiveLineNumbers !== null) {
			$data->showPositiveLineNumbers = $this->showPositiveLineNumbers;
		}
		if ($this->showNegativeLineNumbers !== null) {
			$data->showNegativeLineNumbers = $this->showNegativeLineNumbers;
		}
		if ($this->showAreaNames !== null) {
			$data->showAreaNames = $this->showAreaNames;
		}
		if ($this->showLineNames !== null) {
			$data->showLineNames = $this->showLineNames;
		}
		if ($this->showTrackSizes !== null) {
			$data->showTrackSizes = $this->showTrackSizes;
		}
		if ($this->gridBorderColor !== null) {
			$data->gridBorderColor = $this->gridBorderColor->jsonSerialize();
		}
		if ($this->cellBorderColor !== null) {
			$data->cellBorderColor = $this->cellBorderColor->jsonSerialize();
		}
		if ($this->rowLineColor !== null) {
			$data->rowLineColor = $this->rowLineColor->jsonSerialize();
		}
		if ($this->columnLineColor !== null) {
			$data->columnLineColor = $this->columnLineColor->jsonSerialize();
		}
		if ($this->gridBorderDash !== null) {
			$data->gridBorderDash = $this->gridBorderDash;
		}
		if ($this->cellBorderDash !== null) {
			$data->cellBorderDash = $this->cellBorderDash;
		}
		if ($this->rowLineDash !== null) {
			$data->rowLineDash = $this->rowLineDash;
		}
		if ($this->columnLineDash !== null) {
			$data->columnLineDash = $this->columnLineDash;
		}
		if ($this->rowGapColor !== null) {
			$data->rowGapColor = $this->rowGapColor->jsonSerialize();
		}
		if ($this->rowHatchColor !== null) {
			$data->rowHatchColor = $this->rowHatchColor->jsonSerialize();
		}
		if ($this->columnGapColor !== null) {
			$data->columnGapColor = $this->columnGapColor->jsonSerialize();
		}
		if ($this->columnHatchColor !== null) {
			$data->columnHatchColor = $this->columnHatchColor->jsonSerialize();
		}
		if ($this->areaBorderColor !== null) {
			$data->areaBorderColor = $this->areaBorderColor->jsonSerialize();
		}
		if ($this->gridBackgroundColor !== null) {
			$data->gridBackgroundColor = $this->gridBackgroundColor->jsonSerialize();
		}
		return $data;
	}
}
