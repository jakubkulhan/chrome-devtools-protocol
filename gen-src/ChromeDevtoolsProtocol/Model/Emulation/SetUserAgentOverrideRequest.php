<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setUserAgentOverride command.
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
