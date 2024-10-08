<?php

namespace ChromeDevtoolsProtocol\Model\Input;

/**
 * Named type Input.DragDataItem.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DragDataItem implements \JsonSerializable
{
	/**
	 * Mime type of the dragged data.
	 *
	 * @var string
	 */
	public $mimeType;

	/**
	 * Depending of the value of `mimeType`, it contains the dragged link, text, HTML markup or any other data.
	 *
	 * @var string
	 */
	public $data;

	/**
	 * Title associated with a link. Only valid when `mimeType` == "text/uri-list".
	 *
	 * @var string|null
	 */
	public $title;

	/**
	 * Stores the base URL for the contained markup. Only valid when `mimeType` == "text/html".
	 *
	 * @var string|null
	 */
	public $baseURL;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->mimeType)) {
			$instance->mimeType = (string)$data->mimeType;
		}
		if (isset($data->data)) {
			$instance->data = (string)$data->data;
		}
		if (isset($data->title)) {
			$instance->title = (string)$data->title;
		}
		if (isset($data->baseURL)) {
			$instance->baseURL = (string)$data->baseURL;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->mimeType !== null) {
			$data->mimeType = $this->mimeType;
		}
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		if ($this->title !== null) {
			$data->title = $this->title;
		}
		if ($this->baseURL !== null) {
			$data->baseURL = $this->baseURL;
		}
		return $data;
	}
}
