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
	 * The request-URI to associate with the setting of the cookie. This value can affect the default domain, path, source port, and source scheme values of the created cookie.
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

	/**
	 * Cookie Priority.
	 *
	 * @var string
	 */
	public $priority;

	/**
	 * True if cookie is SameParty.
	 *
	 * @var bool|null
	 */
	public $sameParty;

	/**
	 * Cookie source scheme type.
	 *
	 * @var string
	 */
	public $sourceScheme;

	/**
	 * Cookie source port. Valid values are {-1, [1, 65535]}, -1 indicates an unspecified port. An unspecified port value allows protocol clients to emulate legacy cookie scope for the port. This is a temporary ability and it will be removed in the future.
	 *
	 * @var int|null
	 */
	public $sourcePort;

	/**
	 * Cookie partition key. The site of the top-level URL the browser was visiting at the start of the request to the endpoint that set the cookie. If not set, the cookie will be set as not partitioned.
	 *
	 * @var string|null
	 */
	public $partitionKey;


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
		if (isset($data->priority)) {
			$instance->priority = (string)$data->priority;
		}
		if (isset($data->sameParty)) {
			$instance->sameParty = (bool)$data->sameParty;
		}
		if (isset($data->sourceScheme)) {
			$instance->sourceScheme = (string)$data->sourceScheme;
		}
		if (isset($data->sourcePort)) {
			$instance->sourcePort = (int)$data->sourcePort;
		}
		if (isset($data->partitionKey)) {
			$instance->partitionKey = (string)$data->partitionKey;
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
		if ($this->priority !== null) {
			$data->priority = $this->priority;
		}
		if ($this->sameParty !== null) {
			$data->sameParty = $this->sameParty;
		}
		if ($this->sourceScheme !== null) {
			$data->sourceScheme = $this->sourceScheme;
		}
		if ($this->sourcePort !== null) {
			$data->sourcePort = $this->sourcePort;
		}
		if ($this->partitionKey !== null) {
			$data->partitionKey = $this->partitionKey;
		}
		return $data;
	}
}
