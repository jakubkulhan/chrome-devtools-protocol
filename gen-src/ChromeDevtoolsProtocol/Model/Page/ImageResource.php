<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * The image definition used in both icon and screenshot.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ImageResource implements \JsonSerializable
{
	/**
	 * The src field in the definition, but changing to url in favor of consistency.
	 *
	 * @var string
	 */
	public $url;

	/** @var string|null */
	public $sizes;

	/** @var string|null */
	public $type;


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
		if (isset($data->sizes)) {
			$instance->sizes = (string)$data->sizes;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->sizes !== null) {
			$data->sizes = $this->sizes;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		return $data;
	}
}
