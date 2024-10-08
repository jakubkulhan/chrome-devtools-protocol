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
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->postData)) {
			$instance->postData = (string)$data->postData;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->postData !== null) {
			$data->postData = $this->postData;
		}
		return $data;
	}
}
