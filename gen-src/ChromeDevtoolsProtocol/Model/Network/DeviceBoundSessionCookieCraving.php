<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * A device bound session's cookie craving.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeviceBoundSessionCookieCraving implements \JsonSerializable
{
	/**
	 * The name of the craving.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * The domain of the craving.
	 *
	 * @var string
	 */
	public $domain;

	/**
	 * The path of the craving.
	 *
	 * @var string
	 */
	public $path;

	/**
	 * The `Secure` attribute of the craving attributes.
	 *
	 * @var bool
	 */
	public $secure;

	/**
	 * The `HttpOnly` attribute of the craving attributes.
	 *
	 * @var bool
	 */
	public $httpOnly;

	/**
	 * The `SameSite` attribute of the craving attributes.
	 *
	 * @var string
	 */
	public $sameSite;


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
		if (isset($data->domain)) {
			$instance->domain = (string)$data->domain;
		}
		if (isset($data->path)) {
			$instance->path = (string)$data->path;
		}
		if (isset($data->secure)) {
			$instance->secure = (bool)$data->secure;
		}
		if (isset($data->httpOnly)) {
			$instance->httpOnly = (bool)$data->httpOnly;
		}
		if (isset($data->sameSite)) {
			$instance->sameSite = (string)$data->sameSite;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->domain !== null) {
			$data->domain = $this->domain;
		}
		if ($this->path !== null) {
			$data->path = $this->path;
		}
		if ($this->secure !== null) {
			$data->secure = $this->secure;
		}
		if ($this->httpOnly !== null) {
			$data->httpOnly = $this->httpOnly;
		}
		if ($this->sameSite !== null) {
			$data->sameSite = $this->sameSite;
		}
		return $data;
	}
}
