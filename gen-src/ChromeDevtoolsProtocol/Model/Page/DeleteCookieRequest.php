<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.deleteCookie command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeleteCookieRequest implements \JsonSerializable
{
	/**
	 * Name of the cookie to remove.
	 *
	 * @var string
	 */
	public $cookieName;

	/**
	 * URL to match cooke domain and path.
	 *
	 * @var string
	 */
	public $url;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->cookieName)) {
			$instance->cookieName = (string)$data->cookieName;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->cookieName !== null) {
			$data->cookieName = $this->cookieName;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DeleteCookieRequestBuilder
	 */
	public static function builder(): DeleteCookieRequestBuilder
	{
		return new DeleteCookieRequestBuilder();
	}
}
