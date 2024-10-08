<?php

namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Model\DOM\Rect;

/**
 * Response to Page.getLayoutMetrics command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetLayoutMetricsResponse implements \JsonSerializable
{
	/**
	 * Deprecated metrics relating to the layout viewport. Is in device pixels. Use `cssLayoutViewport` instead.
	 *
	 * @var LayoutViewport
	 */
	public $layoutViewport;

	/**
	 * Deprecated metrics relating to the visual viewport. Is in device pixels. Use `cssVisualViewport` instead.
	 *
	 * @var VisualViewport
	 */
	public $visualViewport;

	/**
	 * Deprecated size of scrollable area. Is in DP. Use `cssContentSize` instead.
	 *
	 * @var Rect
	 */
	public $contentSize;

	/**
	 * Metrics relating to the layout viewport in CSS pixels.
	 *
	 * @var LayoutViewport
	 */
	public $cssLayoutViewport;

	/**
	 * Metrics relating to the visual viewport in CSS pixels.
	 *
	 * @var VisualViewport
	 */
	public $cssVisualViewport;

	/**
	 * Size of scrollable area in CSS pixels.
	 *
	 * @var Rect
	 */
	public $cssContentSize;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->layoutViewport)) {
			$instance->layoutViewport = LayoutViewport::fromJson($data->layoutViewport);
		}
		if (isset($data->visualViewport)) {
			$instance->visualViewport = VisualViewport::fromJson($data->visualViewport);
		}
		if (isset($data->contentSize)) {
			$instance->contentSize = Rect::fromJson($data->contentSize);
		}
		if (isset($data->cssLayoutViewport)) {
			$instance->cssLayoutViewport = LayoutViewport::fromJson($data->cssLayoutViewport);
		}
		if (isset($data->cssVisualViewport)) {
			$instance->cssVisualViewport = VisualViewport::fromJson($data->cssVisualViewport);
		}
		if (isset($data->cssContentSize)) {
			$instance->cssContentSize = Rect::fromJson($data->cssContentSize);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->layoutViewport !== null) {
			$data->layoutViewport = $this->layoutViewport->jsonSerialize();
		}
		if ($this->visualViewport !== null) {
			$data->visualViewport = $this->visualViewport->jsonSerialize();
		}
		if ($this->contentSize !== null) {
			$data->contentSize = $this->contentSize->jsonSerialize();
		}
		if ($this->cssLayoutViewport !== null) {
			$data->cssLayoutViewport = $this->cssLayoutViewport->jsonSerialize();
		}
		if ($this->cssVisualViewport !== null) {
			$data->cssVisualViewport = $this->cssVisualViewport->jsonSerialize();
		}
		if ($this->cssContentSize !== null) {
			$data->cssContentSize = $this->cssContentSize->jsonSerialize();
		}
		return $data;
	}
}
