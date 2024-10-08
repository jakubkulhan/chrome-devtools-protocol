<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.getResourceContent command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetResourceContentResponse implements \JsonSerializable
{
	/**
	 * Resource content.
	 *
	 * @var string
	 */
	public $content;

	/**
	 * True, if content was served as base64.
	 *
	 * @var bool
	 */
	public $base64Encoded;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->content)) {
			$instance->content = (string)$data->content;
		}
		if (isset($data->base64Encoded)) {
			$instance->base64Encoded = (bool)$data->base64Encoded;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->content !== null) {
			$data->content = $this->content;
		}
		if ($this->base64Encoded !== null) {
			$data->base64Encoded = $this->base64Encoded;
		}
		return $data;
	}
}
