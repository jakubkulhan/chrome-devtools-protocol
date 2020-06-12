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
	 * The grid container border highlight color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $gridBorderColor;

	/**
	 * The cell border color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $cellBorderColor;

	/**
	 * Whether the grid border is dashed (default: false).
	 *
	 * @var bool|null
	 */
	public $gridBorderDash;

	/**
	 * Whether the cell border is dashed (default: false).
	 *
	 * @var bool|null
	 */
	public $cellBorderDash;

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


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->showGridExtensionLines)) {
			$instance->showGridExtensionLines = (bool)$data->showGridExtensionLines;
		}
		if (isset($data->showPositiveLineNumbers)) {
			$instance->showPositiveLineNumbers = (bool)$data->showPositiveLineNumbers;
		}
		if (isset($data->gridBorderColor)) {
			$instance->gridBorderColor = RGBA::fromJson($data->gridBorderColor);
		}
		if (isset($data->cellBorderColor)) {
			$instance->cellBorderColor = RGBA::fromJson($data->cellBorderColor);
		}
		if (isset($data->gridBorderDash)) {
			$instance->gridBorderDash = (bool)$data->gridBorderDash;
		}
		if (isset($data->cellBorderDash)) {
			$instance->cellBorderDash = (bool)$data->cellBorderDash;
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
		if ($this->gridBorderColor !== null) {
			$data->gridBorderColor = $this->gridBorderColor->jsonSerialize();
		}
		if ($this->cellBorderColor !== null) {
			$data->cellBorderColor = $this->cellBorderColor->jsonSerialize();
		}
		if ($this->gridBorderDash !== null) {
			$data->gridBorderDash = $this->gridBorderDash;
		}
		if ($this->cellBorderDash !== null) {
			$data->cellBorderDash = $this->cellBorderDash;
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
		return $data;
	}
}
