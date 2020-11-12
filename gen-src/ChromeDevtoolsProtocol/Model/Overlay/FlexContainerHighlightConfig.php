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
		return $data;
	}
}
