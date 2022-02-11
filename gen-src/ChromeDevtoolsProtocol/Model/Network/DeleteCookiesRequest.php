<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.deleteCookies command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeleteCookiesRequest implements \JsonSerializable
{
	/**
	 * Name of the cookies to remove.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * If specified, deletes all the cookies with the given name where domain and path match provided URL.
	 *
	 * @var string|null
	 */
	public $url;

	/**
	 * If specified, deletes only cookies with the exact domain.
	 *
	 * @var string|null
	 */
	public $domain;

	/**
	 * If specified, deletes only cookies with the exact path.
	 *
	 * @var string|null
	 */
	public $path;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->domain)) {
			$instance->domain = (string)$data->domain;
		}
		if (isset($data->path)) {
			$instance->path = (string)$data->path;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->domain !== null) {
			$data->domain = $this->domain;
		}
		if ($this->path !== null) {
			$data->path = $this->path;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DeleteCookiesRequestBuilder
	 */
	public static function builder(): DeleteCookiesRequestBuilder
	{
		return new DeleteCookiesRequestBuilder();
	}
}
