<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

/**
 * Request for ServiceWorker.dispatchSyncEvent command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DispatchSyncEventRequest implements \JsonSerializable
{
	/** @var string */
	public $origin;

	/** @var string */
	public $registrationId;

	/** @var string */
	public $tag;

	/** @var bool */
	public $lastChance;


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
		if (isset($data->tag)) {
			$instance->tag = (string)$data->tag;
		}
		if (isset($data->lastChance)) {
			$instance->lastChance = (bool)$data->lastChance;
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
		if ($this->tag !== null) {
			$data->tag = $this->tag;
		}
		if ($this->lastChance !== null) {
			$data->lastChance = $this->lastChance;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DispatchSyncEventRequestBuilder
	 */
	public static function builder(): DispatchSyncEventRequestBuilder
	{
		return new DispatchSyncEventRequestBuilder();
	}
}
