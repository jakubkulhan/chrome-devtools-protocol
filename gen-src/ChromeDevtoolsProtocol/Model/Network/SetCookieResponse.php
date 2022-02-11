<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Response to Network.setCookie command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetCookieResponse implements \JsonSerializable
{
	/**
	 * Always set to true. If an error occurs, the response indicates protocol error.
	 *
	 * @var bool
	 */
	public $success;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->success)) {
			$instance->success = (bool)$data->success;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->success !== null) {
			$data->success = $this->success;
		}
		return $data;
	}
}
