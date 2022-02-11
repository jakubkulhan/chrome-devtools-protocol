<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Model\Network\CookieParam;

/**
 * Request for Storage.setCookies command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetCookiesRequest implements \JsonSerializable
{
	/**
	 * Cookies to be set.
	 *
	 * @var CookieParam[]
	 */
	public $cookies;

	/**
	 * Browser context to use when called on the browser endpoint.
	 *
	 * @var string
	 */
	public $browserContextId;


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
				$instance->cookies[] = CookieParam::fromJson($item);
			}
		}
		if (isset($data->browserContextId)) {
			$instance->browserContextId = (string)$data->browserContextId;
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
		if ($this->browserContextId !== null) {
			$data->browserContextId = $this->browserContextId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetCookiesRequestBuilder
	 */
	public static function builder(): SetCookiesRequestBuilder
	{
		return new SetCookiesRequestBuilder();
	}
}
