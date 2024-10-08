<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Configuration data for the highlighting of Flex item elements.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FlexItemHighlightConfig implements \JsonSerializable
{
	/**
	 * Style of the box representing the item's base size
	 *
	 * @var BoxStyle|null
	 */
	public $baseSizeBox;

	/**
	 * Style of the border around the box representing the item's base size
	 *
	 * @var LineStyle|null
	 */
	public $baseSizeBorder;

	/**
	 * Style of the arrow representing if the item grew or shrank
	 *
	 * @var LineStyle|null
	 */
	public $flexibilityArrow;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->baseSizeBox)) {
			$instance->baseSizeBox = BoxStyle::fromJson($data->baseSizeBox);
		}
		if (isset($data->baseSizeBorder)) {
			$instance->baseSizeBorder = LineStyle::fromJson($data->baseSizeBorder);
		}
		if (isset($data->flexibilityArrow)) {
			$instance->flexibilityArrow = LineStyle::fromJson($data->flexibilityArrow);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->baseSizeBox !== null) {
			$data->baseSizeBox = $this->baseSizeBox->jsonSerialize();
		}
		if ($this->baseSizeBorder !== null) {
			$data->baseSizeBorder = $this->baseSizeBorder->jsonSerialize();
		}
		if ($this->flexibilityArrow !== null) {
			$data->flexibilityArrow = $this->flexibilityArrow->jsonSerialize();
		}
		return $data;
	}
}
