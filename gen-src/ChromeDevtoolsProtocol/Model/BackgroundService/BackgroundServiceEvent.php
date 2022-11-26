<?php

namespace ChromeDevtoolsProtocol\Model\BackgroundService;

/**
 * Named type BackgroundService.BackgroundServiceEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BackgroundServiceEvent implements \JsonSerializable
{
	/**
	 * Timestamp of the event (in seconds).
	 *
	 * @var int|float
	 */
	public $timestamp;

	/**
	 * The origin this event belongs to.
	 *
	 * @var string
	 */
	public $origin;

	/**
	 * The Service Worker ID that initiated the event.
	 *
	 * @var string
	 */
	public $serviceWorkerRegistrationId;

	/**
	 * The Background Service this event belongs to.
	 *
	 * @var string
	 */
	public $service;

	/**
	 * A description of the event.
	 *
	 * @var string
	 */
	public $eventName;

	/**
	 * An identifier that groups related events together.
	 *
	 * @var string
	 */
	public $instanceId;

	/**
	 * A list of event-specific information.
	 *
	 * @var EventMetadata[]
	 */
	public $eventMetadata;

	/**
	 * Storage key this event belongs to.
	 *
	 * @var string
	 */
	public $storageKey;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		if (isset($data->serviceWorkerRegistrationId)) {
			$instance->serviceWorkerRegistrationId = (string)$data->serviceWorkerRegistrationId;
		}
		if (isset($data->service)) {
			$instance->service = (string)$data->service;
		}
		if (isset($data->eventName)) {
			$instance->eventName = (string)$data->eventName;
		}
		if (isset($data->instanceId)) {
			$instance->instanceId = (string)$data->instanceId;
		}
		if (isset($data->eventMetadata)) {
			$instance->eventMetadata = [];
			foreach ($data->eventMetadata as $item) {
				$instance->eventMetadata[] = EventMetadata::fromJson($item);
			}
		}
		if (isset($data->storageKey)) {
			$instance->storageKey = (string)$data->storageKey;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->serviceWorkerRegistrationId !== null) {
			$data->serviceWorkerRegistrationId = $this->serviceWorkerRegistrationId;
		}
		if ($this->service !== null) {
			$data->service = $this->service;
		}
		if ($this->eventName !== null) {
			$data->eventName = $this->eventName;
		}
		if ($this->instanceId !== null) {
			$data->instanceId = $this->instanceId;
		}
		if ($this->eventMetadata !== null) {
			$data->eventMetadata = [];
			foreach ($this->eventMetadata as $item) {
				$data->eventMetadata[] = $item->jsonSerialize();
			}
		}
		if ($this->storageKey !== null) {
			$data->storageKey = $this->storageKey;
		}
		return $data;
	}
}
