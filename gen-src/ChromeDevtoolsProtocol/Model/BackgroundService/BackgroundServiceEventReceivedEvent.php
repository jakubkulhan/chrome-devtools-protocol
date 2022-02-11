<?php

namespace ChromeDevtoolsProtocol\Model\BackgroundService;

/**
 * Called with all existing backgroundServiceEvents when enabled, and all new events afterwards if enabled and recording.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BackgroundServiceEventReceivedEvent implements \JsonSerializable
{
	/** @var BackgroundServiceEvent */
	public $backgroundServiceEvent;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->backgroundServiceEvent)) {
			$instance->backgroundServiceEvent = BackgroundServiceEvent::fromJson($data->backgroundServiceEvent);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->backgroundServiceEvent !== null) {
			$data->backgroundServiceEvent = $this->backgroundServiceEvent->jsonSerialize();
		}
		return $data;
	}
}
