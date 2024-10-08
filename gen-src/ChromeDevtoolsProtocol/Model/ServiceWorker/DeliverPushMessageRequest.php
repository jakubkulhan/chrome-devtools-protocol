<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

/**
 * Request for ServiceWorker.deliverPushMessage command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeliverPushMessageRequest implements \JsonSerializable
{
	/** @var string */
	public $origin;

	/** @var string */
	public $registrationId;

	/** @var string */
	public $data;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		if (isset($data->registrationId)) {
			$instance->registrationId = (string)$data->registrationId;
		}
		if (isset($data->data)) {
			$instance->data = (string)$data->data;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->registrationId !== null) {
			$data->registrationId = $this->registrationId;
		}
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DeliverPushMessageRequestBuilder
	 */
	public static function builder(): DeliverPushMessageRequestBuilder
	{
		return new DeliverPushMessageRequestBuilder();
	}
}
