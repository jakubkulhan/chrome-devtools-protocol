<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.deleteDeviceBoundSession command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeleteDeviceBoundSessionRequest implements \JsonSerializable
{
	/** @var DeviceBoundSessionKey */
	public $key;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->key)) {
			$instance->key = DeviceBoundSessionKey::fromJson($data->key);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->key !== null) {
			$data->key = $this->key->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DeleteDeviceBoundSessionRequestBuilder
	 */
	public static function builder(): DeleteDeviceBoundSessionRequestBuilder
	{
		return new DeleteDeviceBoundSessionRequestBuilder();
	}
}
