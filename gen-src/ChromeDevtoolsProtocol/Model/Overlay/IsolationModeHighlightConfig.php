<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Model\DOM\RGBA;

/**
 * Named type Overlay.IsolationModeHighlightConfig.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class IsolationModeHighlightConfig implements \JsonSerializable
{
	/**
	 * The fill color of the resizers (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $resizerColor;

	/**
	 * The fill color for resizer handles (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $resizerHandleColor;

	/**
	 * The fill color for the mask covering non-isolated elements (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $maskColor;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->resizerColor)) {
			$instance->resizerColor = RGBA::fromJson($data->resizerColor);
		}
		if (isset($data->resizerHandleColor)) {
			$instance->resizerHandleColor = RGBA::fromJson($data->resizerHandleColor);
		}
		if (isset($data->maskColor)) {
			$instance->maskColor = RGBA::fromJson($data->maskColor);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->resizerColor !== null) {
			$data->resizerColor = $this->resizerColor->jsonSerialize();
		}
		if ($this->resizerHandleColor !== null) {
			$data->resizerHandleColor = $this->resizerHandleColor->jsonSerialize();
		}
		if ($this->maskColor !== null) {
			$data->maskColor = $this->maskColor->jsonSerialize();
		}
		return $data;
	}
}
