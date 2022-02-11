<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.setCookies command.
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
