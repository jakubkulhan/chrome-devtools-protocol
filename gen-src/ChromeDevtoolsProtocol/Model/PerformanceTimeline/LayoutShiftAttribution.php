<?php

namespace ChromeDevtoolsProtocol\Model\PerformanceTimeline;

use ChromeDevtoolsProtocol\Model\DOM\Rect;

/**
 * Named type PerformanceTimeline.LayoutShiftAttribution.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LayoutShiftAttribution implements \JsonSerializable
{
	/** @var Rect */
	public $previousRect;

	/** @var Rect */
	public $currentRect;

	/** @var int */
	public $nodeId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->previousRect)) {
			$instance->previousRect = Rect::fromJson($data->previousRect);
		}
		if (isset($data->currentRect)) {
			$instance->currentRect = Rect::fromJson($data->currentRect);
		}
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->previousRect !== null) {
			$data->previousRect = $this->previousRect->jsonSerialize();
		}
		if ($this->currentRect !== null) {
			$data->currentRect = $this->currentRect->jsonSerialize();
		}
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		return $data;
	}
}
