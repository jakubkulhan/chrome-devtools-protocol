<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Information about the Resource on the page.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FrameResource implements \JsonSerializable
{
	/**
	 * Resource URL.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Type of this resource.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Resource mimeType as determined by the browser.
	 *
	 * @var string
	 */
	public $mimeType;

	/**
	 * last-modified timestamp as reported by server.
	 *
	 * @var int|float
	 */
	public $lastModified;

	/**
	 * Resource content size.
	 *
	 * @var int|float|null
	 */
	public $contentSize;

	/**
	 * True if the resource failed to load.
	 *
	 * @var bool|null
	 */
	public $failed;

	/**
	 * True if the resource was canceled during loading.
	 *
	 * @var bool|null
	 */
	public $canceled;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->mimeType)) {
			$instance->mimeType = (string)$data->mimeType;
		}
		if (isset($data->lastModified)) {
			$instance->lastModified = $data->lastModified;
		}
		if (isset($data->contentSize)) {
			$instance->contentSize = $data->contentSize;
		}
		if (isset($data->failed)) {
			$instance->failed = (bool)$data->failed;
		}
		if (isset($data->canceled)) {
			$instance->canceled = (bool)$data->canceled;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->mimeType !== null) {
			$data->mimeType = $this->mimeType;
		}
		if ($this->lastModified !== null) {
			$data->lastModified = $this->lastModified;
		}
		if ($this->contentSize !== null) {
			$data->contentSize = $this->contentSize;
		}
		if ($this->failed !== null) {
			$data->failed = $this->failed;
		}
		if ($this->canceled !== null) {
			$data->canceled = $this->canceled;
		}
		return $data;
	}
}
