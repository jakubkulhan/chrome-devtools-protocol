<?php

namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

/**
 * Request for DOMSnapshot.captureSnapshot command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CaptureSnapshotRequest implements \JsonSerializable
{
	/**
	 * Whitelist of computed styles to return.
	 *
	 * @var string[]
	 */
	public $computedStyles;

	/**
	 * Whether to include layout object paint orders into the snapshot.
	 *
	 * @var bool|null
	 */
	public $includePaintOrder;

	/**
	 * Whether to include DOM rectangles (offsetRects, clientRects, scrollRects) into the snapshot
	 *
	 * @var bool|null
	 */
	public $includeDOMRects;

	/**
	 * Whether to include blended background colors in the snapshot (default: false). Blended background color is achieved by blending background colors of all elements that overlap with the current element.
	 *
	 * @var bool|null
	 */
	public $includeBlendedBackgroundColors;

	/**
	 * Whether to include text color opacity in the snapshot (default: false). An element might have the opacity property set that affects the text color of the element. The final text color opacity is computed based on the opacity of all overlapping elements.
	 *
	 * @var bool|null
	 */
	public $includeTextColorOpacities;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->computedStyles)) {
			$instance->computedStyles = [];
			foreach ($data->computedStyles as $item) {
				$instance->computedStyles[] = (string)$item;
			}
		}
		if (isset($data->includePaintOrder)) {
			$instance->includePaintOrder = (bool)$data->includePaintOrder;
		}
		if (isset($data->includeDOMRects)) {
			$instance->includeDOMRects = (bool)$data->includeDOMRects;
		}
		if (isset($data->includeBlendedBackgroundColors)) {
			$instance->includeBlendedBackgroundColors = (bool)$data->includeBlendedBackgroundColors;
		}
		if (isset($data->includeTextColorOpacities)) {
			$instance->includeTextColorOpacities = (bool)$data->includeTextColorOpacities;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->computedStyles !== null) {
			$data->computedStyles = [];
			foreach ($this->computedStyles as $item) {
				$data->computedStyles[] = $item;
			}
		}
		if ($this->includePaintOrder !== null) {
			$data->includePaintOrder = $this->includePaintOrder;
		}
		if ($this->includeDOMRects !== null) {
			$data->includeDOMRects = $this->includeDOMRects;
		}
		if ($this->includeBlendedBackgroundColors !== null) {
			$data->includeBlendedBackgroundColors = $this->includeBlendedBackgroundColors;
		}
		if ($this->includeTextColorOpacities !== null) {
			$data->includeTextColorOpacities = $this->includeTextColorOpacities;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return CaptureSnapshotRequestBuilder
	 */
	public static function builder(): CaptureSnapshotRequestBuilder
	{
		return new CaptureSnapshotRequestBuilder();
	}
}
