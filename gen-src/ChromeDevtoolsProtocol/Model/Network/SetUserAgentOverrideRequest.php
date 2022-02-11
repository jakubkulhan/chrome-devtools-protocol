<?php

namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Model\Emulation\UserAgentMetadata;

/**
 * Request for Network.setUserAgentOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetUserAgentOverrideRequest implements \JsonSerializable
{
	/**
	 * User agent to use.
	 *
	 * @var string
	 */
	public $userAgent;

	/**
	 * Browser langugage to emulate.
	 *
	 * @var string|null
	 */
	public $acceptLanguage;

	/**
	 * The platform navigator.platform should return.
	 *
	 * @var string|null
	 */
	public $platform;

	/**
	 * To be sent in Sec-CH-UA-* headers and returned in navigator.userAgentData
	 *
	 * @var UserAgentMetadata|null
	 */
	public $userAgentMetadata;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->userAgent)) {
			$instance->userAgent = (string)$data->userAgent;
		}
		if (isset($data->acceptLanguage)) {
			$instance->acceptLanguage = (string)$data->acceptLanguage;
		}
		if (isset($data->platform)) {
			$instance->platform = (string)$data->platform;
		}
		if (isset($data->userAgentMetadata)) {
			$instance->userAgentMetadata = UserAgentMetadata::fromJson($data->userAgentMetadata);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->userAgent !== null) {
			$data->userAgent = $this->userAgent;
		}
		if ($this->acceptLanguage !== null) {
			$data->acceptLanguage = $this->acceptLanguage;
		}
		if ($this->platform !== null) {
			$data->platform = $this->platform;
		}
		if ($this->userAgentMetadata !== null) {
			$data->userAgentMetadata = $this->userAgentMetadata->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetUserAgentOverrideRequestBuilder
	 */
	public static function builder(): SetUserAgentOverrideRequestBuilder
	{
		return new SetUserAgentOverrideRequestBuilder();
	}
}
