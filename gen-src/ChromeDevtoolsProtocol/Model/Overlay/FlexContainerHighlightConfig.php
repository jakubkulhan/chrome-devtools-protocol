<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Configuration data for the highlighting of Flex container elements.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FlexContainerHighlightConfig implements \JsonSerializable
{
	/**
	 * The style of the container border
	 *
	 * @var LineStyle|null
	 */
	public $containerBorder;

	/**
	 * The style of the separator between lines
	 *
	 * @var LineStyle|null
	 */
	public $lineSeparator;

	/**
	 * The style of the separator between items
	 *
	 * @var LineStyle|null
	 */
	public $itemSeparator;

	/**
	 * Style of content-distribution space on the main axis (justify-content).
	 *
	 * @var BoxStyle|null
	 */
	public $mainDistributedSpace;

	/**
	 * Style of content-distribution space on the cross axis (align-content).
	 *
	 * @var BoxStyle|null
	 */
	public $crossDistributedSpace;

	/**
	 * Style of empty space caused by row gaps (gap/row-gap).
	 *
	 * @var BoxStyle|null
	 */
	public $rowGapSpace;

	/**
	 * Style of empty space caused by columns gaps (gap/column-gap).
	 *
	 * @var BoxStyle|null
	 */
	public $columnGapSpace;

	/**
	 * Style of the self-alignment line (align-items).
	 *
	 * @var LineStyle|null
	 */
	public $crossAlignment;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->containerBorder)) {
			$instance->containerBorder = LineStyle::fromJson($data->containerBorder);
		}
		if (isset($data->lineSeparator)) {
			$instance->lineSeparator = LineStyle::fromJson($data->lineSeparator);
		}
		if (isset($data->itemSeparator)) {
			$instance->itemSeparator = LineStyle::fromJson($data->itemSeparator);
		}
		if (isset($data->mainDistributedSpace)) {
			$instance->mainDistributedSpace = BoxStyle::fromJson($data->mainDistributedSpace);
		}
		if (isset($data->crossDistributedSpace)) {
			$instance->crossDistributedSpace = BoxStyle::fromJson($data->crossDistributedSpace);
		}
		if (isset($data->rowGapSpace)) {
			$instance->rowGapSpace = BoxStyle::fromJson($data->rowGapSpace);
		}
		if (isset($data->columnGapSpace)) {
			$instance->columnGapSpace = BoxStyle::fromJson($data->columnGapSpace);
		}
		if (isset($data->crossAlignment)) {
			$instance->crossAlignment = LineStyle::fromJson($data->crossAlignment);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->containerBorder !== null) {
			$data->containerBorder = $this->containerBorder->jsonSerialize();
		}
		if ($this->lineSeparator !== null) {
			$data->lineSeparator = $this->lineSeparator->jsonSerialize();
		}
		if ($this->itemSeparator !== null) {
			$data->itemSeparator = $this->itemSeparator->jsonSerialize();
		}
		if ($this->mainDistributedSpace !== null) {
			$data->mainDistributedSpace = $this->mainDistributedSpace->jsonSerialize();
		}
		if ($this->crossDistributedSpace !== null) {
			$data->crossDistributedSpace = $this->crossDistributedSpace->jsonSerialize();
		}
		if ($this->rowGapSpace !== null) {
			$data->rowGapSpace = $this->rowGapSpace->jsonSerialize();
		}
		if ($this->columnGapSpace !== null) {
			$data->columnGapSpace = $this->columnGapSpace->jsonSerialize();
		}
		if ($this->crossAlignment !== null) {
			$data->crossAlignment = $this->crossAlignment->jsonSerialize();
		}
		return $data;
	}
}
