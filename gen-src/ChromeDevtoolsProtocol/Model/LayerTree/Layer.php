<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

/**
 * Information about a compositing layer.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Layer implements \JsonSerializable
{
	/**
	 * The unique id for this layer.
	 *
	 * @var string
	 */
	public $layerId;

	/**
	 * The id of parent (not present for root).
	 *
	 * @var string
	 */
	public $parentLayerId;

	/**
	 * The backend id for the node associated with this layer.
	 *
	 * @var int
	 */
	public $backendNodeId;

	/**
	 * Offset from parent layer, X coordinate.
	 *
	 * @var int|float
	 */
	public $offsetX;

	/**
	 * Offset from parent layer, Y coordinate.
	 *
	 * @var int|float
	 */
	public $offsetY;

	/**
	 * Layer width.
	 *
	 * @var int|float
	 */
	public $width;

	/**
	 * Layer height.
	 *
	 * @var int|float
	 */
	public $height;

	/**
	 * Transformation matrix for layer, default is identity matrix
	 *
	 * @var int[]|float[]|null
	 */
	public $transform;

	/**
	 * Transform anchor point X, absent if no transform specified
	 *
	 * @var int|float|null
	 */
	public $anchorX;

	/**
	 * Transform anchor point Y, absent if no transform specified
	 *
	 * @var int|float|null
	 */
	public $anchorY;

	/**
	 * Transform anchor point Z, absent if no transform specified
	 *
	 * @var int|float|null
	 */
	public $anchorZ;

	/**
	 * Indicates how many time this layer has painted.
	 *
	 * @var int
	 */
	public $paintCount;

	/**
	 * Indicates whether this layer hosts any content, rather than being used for transform/scrolling purposes only.
	 *
	 * @var bool
	 */
	public $drawsContent;

	/**
	 * Set if layer is not visible.
	 *
	 * @var bool|null
	 */
	public $invisible;

	/**
	 * Rectangles scrolling on main thread only.
	 *
	 * @var ScrollRect[]|null
	 */
	public $scrollRects;

	/**
	 * Sticky position constraint information
	 *
	 * @var StickyPositionConstraint|null
	 */
	public $stickyPositionConstraint;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->layerId)) {
			$instance->layerId = (string)$data->layerId;
		}
		if (isset($data->parentLayerId)) {
			$instance->parentLayerId = (string)$data->parentLayerId;
		}
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = (int)$data->backendNodeId;
		}
		if (isset($data->offsetX)) {
			$instance->offsetX = $data->offsetX;
		}
		if (isset($data->offsetY)) {
			$instance->offsetY = $data->offsetY;
		}
		if (isset($data->width)) {
			$instance->width = $data->width;
		}
		if (isset($data->height)) {
			$instance->height = $data->height;
		}
		if (isset($data->transform)) {
			$instance->transform = [];
			foreach ($data->transform as $item) {
				$instance->transform[] = $item;
			}
		}
		if (isset($data->anchorX)) {
			$instance->anchorX = $data->anchorX;
		}
		if (isset($data->anchorY)) {
			$instance->anchorY = $data->anchorY;
		}
		if (isset($data->anchorZ)) {
			$instance->anchorZ = $data->anchorZ;
		}
		if (isset($data->paintCount)) {
			$instance->paintCount = (int)$data->paintCount;
		}
		if (isset($data->drawsContent)) {
			$instance->drawsContent = (bool)$data->drawsContent;
		}
		if (isset($data->invisible)) {
			$instance->invisible = (bool)$data->invisible;
		}
		if (isset($data->scrollRects)) {
			$instance->scrollRects = [];
			foreach ($data->scrollRects as $item) {
				$instance->scrollRects[] = ScrollRect::fromJson($item);
			}
		}
		if (isset($data->stickyPositionConstraint)) {
			$instance->stickyPositionConstraint = StickyPositionConstraint::fromJson($data->stickyPositionConstraint);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->layerId !== null) {
			$data->layerId = $this->layerId;
		}
		if ($this->parentLayerId !== null) {
			$data->parentLayerId = $this->parentLayerId;
		}
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = $this->backendNodeId;
		}
		if ($this->offsetX !== null) {
			$data->offsetX = $this->offsetX;
		}
		if ($this->offsetY !== null) {
			$data->offsetY = $this->offsetY;
		}
		if ($this->width !== null) {
			$data->width = $this->width;
		}
		if ($this->height !== null) {
			$data->height = $this->height;
		}
		if ($this->transform !== null) {
			$data->transform = [];
			foreach ($this->transform as $item) {
				$data->transform[] = $item;
			}
		}
		if ($this->anchorX !== null) {
			$data->anchorX = $this->anchorX;
		}
		if ($this->anchorY !== null) {
			$data->anchorY = $this->anchorY;
		}
		if ($this->anchorZ !== null) {
			$data->anchorZ = $this->anchorZ;
		}
		if ($this->paintCount !== null) {
			$data->paintCount = $this->paintCount;
		}
		if ($this->drawsContent !== null) {
			$data->drawsContent = $this->drawsContent;
		}
		if ($this->invisible !== null) {
			$data->invisible = $this->invisible;
		}
		if ($this->scrollRects !== null) {
			$data->scrollRects = [];
			foreach ($this->scrollRects as $item) {
				$data->scrollRects[] = $item->jsonSerialize();
			}
		}
		if ($this->stickyPositionConstraint !== null) {
			$data->stickyPositionConstraint = $this->stickyPositionConstraint->jsonSerialize();
		}
		return $data;
	}
}
