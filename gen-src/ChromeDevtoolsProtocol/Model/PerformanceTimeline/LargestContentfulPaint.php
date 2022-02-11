<?php

namespace ChromeDevtoolsProtocol\Model\PerformanceTimeline;

/**
 * See https://github.com/WICG/LargestContentfulPaint and largest_contentful_paint.idl
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LargestContentfulPaint implements \JsonSerializable
{
	/** @var int|float */
	public $renderTime;

	/** @var int|float */
	public $loadTime;

	/**
	 * The number of pixels being painted.
	 *
	 * @var int|float
	 */
	public $size;

	/**
	 * The id attribute of the element, if available.
	 *
	 * @var string|null
	 */
	public $elementId;

	/**
	 * The URL of the image (may be trimmed).
	 *
	 * @var string|null
	 */
	public $url;

	/** @var int */
	public $nodeId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->renderTime)) {
			$instance->renderTime = $data->renderTime;
		}
		if (isset($data->loadTime)) {
			$instance->loadTime = $data->loadTime;
		}
		if (isset($data->size)) {
			$instance->size = $data->size;
		}
		if (isset($data->elementId)) {
			$instance->elementId = (string)$data->elementId;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->renderTime !== null) {
			$data->renderTime = $this->renderTime;
		}
		if ($this->loadTime !== null) {
			$data->loadTime = $this->loadTime;
		}
		if ($this->size !== null) {
			$data->size = $this->size;
		}
		if ($this->elementId !== null) {
			$data->elementId = $this->elementId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		return $data;
	}
}
