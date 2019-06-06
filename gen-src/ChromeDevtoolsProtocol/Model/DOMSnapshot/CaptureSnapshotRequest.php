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
	 * Whether to include DOM rectangles (offsetRects, clientRects, scrollRects) into the snapshot
	 *
	 * @var bool|null
	 */
	public $includeDOMRects;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->computedStyles)) {
			$instance->computedStyles = [];
			foreach ($data->computedStyles as $item) {
				$instance->computedStyles[] = (string)$item;
			}
		}
		if (isset($data->includeDOMRects)) {
			$instance->includeDOMRects = (bool)$data->includeDOMRects;
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
		if ($this->includeDOMRects !== null) {
			$data->includeDOMRects = $this->includeDOMRects;
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
