<?php

namespace ChromeDevtoolsProtocol\Model\PerformanceTimeline;

/**
 * Sent when a performance timeline event is added. See reportPerformanceTimeline method.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TimelineEventAddedEvent implements \JsonSerializable
{
	/** @var TimelineEvent */
	public $event;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->event)) {
			$instance->event = TimelineEvent::fromJson($data->event);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->event !== null) {
			$data->event = $this->event->jsonSerialize();
		}
		return $data;
	}
}
