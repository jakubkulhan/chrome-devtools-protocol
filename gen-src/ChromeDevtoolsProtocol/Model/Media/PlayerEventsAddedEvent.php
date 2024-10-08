<?php

namespace ChromeDevtoolsProtocol\Model\Media;

/**
 * Send events as a list, allowing them to be batched on the browser for less congestion. If batched, events must ALWAYS be in chronological order.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PlayerEventsAddedEvent implements \JsonSerializable
{
	/** @var string */
	public $playerId;

	/** @var PlayerEvent[] */
	public $events;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->playerId)) {
			$instance->playerId = (string)$data->playerId;
		}
		if (isset($data->events)) {
			$instance->events = [];
			foreach ($data->events as $item) {
				$instance->events[] = PlayerEvent::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->playerId !== null) {
			$data->playerId = $this->playerId;
		}
		if ($this->events !== null) {
			$data->events = [];
			foreach ($this->events as $item) {
				$data->events[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
