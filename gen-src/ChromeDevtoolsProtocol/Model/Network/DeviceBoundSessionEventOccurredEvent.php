<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Triggered when a device bound session event occurs.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeviceBoundSessionEventOccurredEvent implements \JsonSerializable
{
	/**
	 * A unique identifier for this session event.
	 *
	 * @var string
	 */
	public $eventId;

	/**
	 * The site this session event is associated with.
	 *
	 * @var string
	 */
	public $site;

	/**
	 * Whether this event was considered successful.
	 *
	 * @var bool
	 */
	public $succeeded;

	/**
	 * The session ID this event is associated with. May not be populated for failed events.
	 *
	 * @var string|null
	 */
	public $sessionId;

	/**
	 * The below are the different session event type details. Exactly one is populated.
	 *
	 * @var CreationEventDetails|null
	 */
	public $creationEventDetails;

	/** @var RefreshEventDetails|null */
	public $refreshEventDetails;

	/** @var TerminationEventDetails|null */
	public $terminationEventDetails;

	/** @var ChallengeEventDetails|null */
	public $challengeEventDetails;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->eventId)) {
			$instance->eventId = (string)$data->eventId;
		}
		if (isset($data->site)) {
			$instance->site = (string)$data->site;
		}
		if (isset($data->succeeded)) {
			$instance->succeeded = (bool)$data->succeeded;
		}
		if (isset($data->sessionId)) {
			$instance->sessionId = (string)$data->sessionId;
		}
		if (isset($data->creationEventDetails)) {
			$instance->creationEventDetails = CreationEventDetails::fromJson($data->creationEventDetails);
		}
		if (isset($data->refreshEventDetails)) {
			$instance->refreshEventDetails = RefreshEventDetails::fromJson($data->refreshEventDetails);
		}
		if (isset($data->terminationEventDetails)) {
			$instance->terminationEventDetails = TerminationEventDetails::fromJson($data->terminationEventDetails);
		}
		if (isset($data->challengeEventDetails)) {
			$instance->challengeEventDetails = ChallengeEventDetails::fromJson($data->challengeEventDetails);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->eventId !== null) {
			$data->eventId = $this->eventId;
		}
		if ($this->site !== null) {
			$data->site = $this->site;
		}
		if ($this->succeeded !== null) {
			$data->succeeded = $this->succeeded;
		}
		if ($this->sessionId !== null) {
			$data->sessionId = $this->sessionId;
		}
		if ($this->creationEventDetails !== null) {
			$data->creationEventDetails = $this->creationEventDetails->jsonSerialize();
		}
		if ($this->refreshEventDetails !== null) {
			$data->refreshEventDetails = $this->refreshEventDetails->jsonSerialize();
		}
		if ($this->terminationEventDetails !== null) {
			$data->terminationEventDetails = $this->terminationEventDetails->jsonSerialize();
		}
		if ($this->challengeEventDetails !== null) {
			$data->challengeEventDetails = $this->challengeEventDetails->jsonSerialize();
		}
		return $data;
	}
}
