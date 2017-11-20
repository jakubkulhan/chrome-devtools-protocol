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
	 * Metrics relating to the layout viewport.
	 *
	 * @var LayoutViewport
	 */
	public $layoutViewport;

	/**
	 * Metrics relating to the visual viewport.
	 *
	 * @var VisualViewport
	 */
	public $visualViewport;

	/**
	 * Size of scrollable area.
	 *
	 * @var Rect
	 */
	public $contentSize;


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
		return $data;
	}
}
