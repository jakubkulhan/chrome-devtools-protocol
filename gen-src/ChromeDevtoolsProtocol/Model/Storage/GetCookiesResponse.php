<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Model\Network\Cookie;

/**
 * Response to Storage.getCookies command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetCookiesResponse implements \JsonSerializable
{
	/**
	 * Array of cookie objects.
	 *
	 * @var Cookie[]
	 */
	public $cookies;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->cookies)) {
			$instance->cookies = [];
			foreach ($data->cookies as $item) {
				$instance->cookies[] = Cookie::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->cookies !== null) {
			$data->cookies = [];
			foreach ($this->cookies as $item) {
				$data->cookies[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
