<?php
namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Cookie parameter object
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CookieParam implements \JsonSerializable
{
	/**
	 * Cookie name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Cookie value.
	 *
	 * @var string
	 */
	public $value;

	/**
	 * The request-URI to associate with the setting of the cookie. This value can affect the default domain and path values of the created cookie.
	 *
	 * @var string|null
	 */
	public $url;

	/**
	 * Cookie domain.
	 *
	 * @var string|null
	 */
	public $domain;

	/**
	 * Cookie path.
	 *
	 * @var string|null
	 */
	public $path;

	/**
	 * True if cookie is secure.
	 *
	 * @var bool|null
	 */
	public $secure;

	/**
	 * True if cookie is http-only.
	 *
	 * @var bool|null
	 */
	public $httpOnly;

	/**
	 * Cookie SameSite type.
	 *
	 * @var string
	 */
	public $sameSite;

	/**
	 * Cookie expiration date, session cookie if not set
	 *
	 * @var int|float
	 */
	public $expires;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->value)) {
			$instance->value = (string)$data->value;
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
		if (isset($data->secure)) {
			$instance->secure = (bool)$data->secure;
		}
		if (isset($data->httpOnly)) {
			$instance->httpOnly = (bool)$data->httpOnly;
		}
		if (isset($data->sameSite)) {
			$instance->sameSite = (string)$data->sameSite;
		}
		if (isset($data->expires)) {
			$instance->expires = $data->expires;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
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
		if ($this->secure !== null) {
			$data->secure = $this->secure;
		}
		if ($this->httpOnly !== null) {
			$data->httpOnly = $this->httpOnly;
		}
		if ($this->sameSite !== null) {
			$data->sameSite = $this->sameSite;
		}
		if ($this->expires !== null) {
			$data->expires = $this->expires;
		}
		return $data;
	}
}
