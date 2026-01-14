<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Response to Network.getRequestPostData command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetRequestPostDataResponse implements \JsonSerializable
{
	/**
	 * Request body string, omitting files from multipart requests
	 *
	 * @var string
	 */
	public $postData;

	/**
	 * True, if content was sent as base64.
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
		if (isset($data->postData)) {
			$instance->postData = (string)$data->postData;
		}
		if (isset($data->base64Encoded)) {
			$instance->base64Encoded = (bool)$data->base64Encoded;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->postData !== null) {
			$data->postData = $this->postData;
		}
		if ($this->base64Encoded !== null) {
			$data->base64Encoded = $this->base64Encoded;
		}
		return $data;
	}
}
