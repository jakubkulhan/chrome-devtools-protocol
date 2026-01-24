<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * How a device bound session was used during a request.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeviceBoundSessionWithUsage implements \JsonSerializable
{
	/**
	 * The key for the session.
	 *
	 * @var DeviceBoundSessionKey
	 */
	public $sessionKey;

	/**
	 * How the session was used (or not used).
	 *
	 * @var string
	 */
	public $usage;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->sessionKey)) {
			$instance->sessionKey = DeviceBoundSessionKey::fromJson($data->sessionKey);
		}
		if (isset($data->usage)) {
			$instance->usage = (string)$data->usage;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sessionKey !== null) {
			$data->sessionKey = $this->sessionKey->jsonSerialize();
		}
		if ($this->usage !== null) {
			$data->usage = $this->usage;
		}
		return $data;
	}
}
