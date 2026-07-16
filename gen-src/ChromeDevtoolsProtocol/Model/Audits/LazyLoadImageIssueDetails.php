<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Details for issues about lazy-loaded images without explicit dimensions.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LazyLoadImageIssueDetails implements \JsonSerializable
{
	/**
	 * DOM node of the problematic HTMLImageElement.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * URL or src attribute of the image.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Frame containing the image.
	 *
	 * @var string
	 */
	public $frameId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		return $data;
	}
}
