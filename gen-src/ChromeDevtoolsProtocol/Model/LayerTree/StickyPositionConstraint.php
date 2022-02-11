<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

use ChromeDevtoolsProtocol\Model\DOM\Rect;

/**
 * Sticky position constraints.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StickyPositionConstraint implements \JsonSerializable
{
	/**
	 * Layout rectangle of the sticky element before being shifted
	 *
	 * @var Rect
	 */
	public $stickyBoxRect;

	/**
	 * Layout rectangle of the containing block of the sticky element
	 *
	 * @var Rect
	 */
	public $containingBlockRect;

	/**
	 * The nearest sticky layer that shifts the sticky box
	 *
	 * @var string
	 */
	public $nearestLayerShiftingStickyBox;

	/**
	 * The nearest sticky layer that shifts the containing block
	 *
	 * @var string
	 */
	public $nearestLayerShiftingContainingBlock;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->stickyBoxRect)) {
			$instance->stickyBoxRect = Rect::fromJson($data->stickyBoxRect);
		}
		if (isset($data->containingBlockRect)) {
			$instance->containingBlockRect = Rect::fromJson($data->containingBlockRect);
		}
		if (isset($data->nearestLayerShiftingStickyBox)) {
			$instance->nearestLayerShiftingStickyBox = (string)$data->nearestLayerShiftingStickyBox;
		}
		if (isset($data->nearestLayerShiftingContainingBlock)) {
			$instance->nearestLayerShiftingContainingBlock = (string)$data->nearestLayerShiftingContainingBlock;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->stickyBoxRect !== null) {
			$data->stickyBoxRect = $this->stickyBoxRect->jsonSerialize();
		}
		if ($this->containingBlockRect !== null) {
			$data->containingBlockRect = $this->containingBlockRect->jsonSerialize();
		}
		if ($this->nearestLayerShiftingStickyBox !== null) {
			$data->nearestLayerShiftingStickyBox = $this->nearestLayerShiftingStickyBox;
		}
		if ($this->nearestLayerShiftingContainingBlock !== null) {
			$data->nearestLayerShiftingContainingBlock = $this->nearestLayerShiftingContainingBlock;
		}
		return $data;
	}
}
