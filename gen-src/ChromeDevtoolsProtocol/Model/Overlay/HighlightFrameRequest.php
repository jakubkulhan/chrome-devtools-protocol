<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Model\DOM\RGBA;

/**
 * Request for Overlay.highlightFrame command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HighlightFrameRequest implements \JsonSerializable
{
	/**
	 * Identifier of the frame to highlight.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * The content box highlight fill color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $contentColor;

	/**
	 * The content box highlight outline color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $contentOutlineColor;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->contentColor)) {
			$instance->contentColor = RGBA::fromJson($data->contentColor);
		}
		if (isset($data->contentOutlineColor)) {
			$instance->contentOutlineColor = RGBA::fromJson($data->contentOutlineColor);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->contentColor !== null) {
			$data->contentColor = $this->contentColor->jsonSerialize();
		}
		if ($this->contentOutlineColor !== null) {
			$data->contentOutlineColor = $this->contentOutlineColor->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return HighlightFrameRequestBuilder
	 */
	public static function builder(): HighlightFrameRequestBuilder
	{
		return new HighlightFrameRequestBuilder();
	}
}
