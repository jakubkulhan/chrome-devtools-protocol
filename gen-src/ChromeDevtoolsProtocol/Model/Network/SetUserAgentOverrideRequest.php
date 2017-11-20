<?php
namespace ChromeDevtoolsProtocol\Model\Network;

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


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->userAgent)) {
			$instance->userAgent = (string)$data->userAgent;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->userAgent !== null) {
			$data->userAgent = $this->userAgent;
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
