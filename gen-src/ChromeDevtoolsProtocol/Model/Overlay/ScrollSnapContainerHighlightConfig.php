<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Model\DOM\RGBA;

/**
 * Named type Overlay.ScrollSnapContainerHighlightConfig.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScrollSnapContainerHighlightConfig implements \JsonSerializable
{
	/**
	 * The style of the snapport border (default: transparent)
	 *
	 * @var LineStyle|null
	 */
	public $snapportBorder;

	/**
	 * The style of the snap area border (default: transparent)
	 *
	 * @var LineStyle|null
	 */
	public $snapAreaBorder;

	/**
	 * The margin highlight fill color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $scrollMarginColor;

	/**
	 * The padding highlight fill color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $scrollPaddingColor;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->snapportBorder)) {
			$instance->snapportBorder = LineStyle::fromJson($data->snapportBorder);
		}
		if (isset($data->snapAreaBorder)) {
			$instance->snapAreaBorder = LineStyle::fromJson($data->snapAreaBorder);
		}
		if (isset($data->scrollMarginColor)) {
			$instance->scrollMarginColor = RGBA::fromJson($data->scrollMarginColor);
		}
		if (isset($data->scrollPaddingColor)) {
			$instance->scrollPaddingColor = RGBA::fromJson($data->scrollPaddingColor);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->snapportBorder !== null) {
			$data->snapportBorder = $this->snapportBorder->jsonSerialize();
		}
		if ($this->snapAreaBorder !== null) {
			$data->snapAreaBorder = $this->snapAreaBorder->jsonSerialize();
		}
		if ($this->scrollMarginColor !== null) {
			$data->scrollMarginColor = $this->scrollMarginColor->jsonSerialize();
		}
		if ($this->scrollPaddingColor !== null) {
			$data->scrollPaddingColor = $this->scrollPaddingColor->jsonSerialize();
		}
		return $data;
	}
}
