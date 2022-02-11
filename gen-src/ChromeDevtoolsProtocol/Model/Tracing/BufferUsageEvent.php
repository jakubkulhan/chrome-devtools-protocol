<?php

namespace ChromeDevtoolsProtocol\Model\Tracing;

/**
 * Named type Tracing.BufferUsageEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BufferUsageEvent implements \JsonSerializable
{
	/**
	 * A number in range [0..1] that indicates the used size of event buffer as a fraction of its total size.
	 *
	 * @var int|float|null
	 */
	public $percentFull;

	/**
	 * An approximate number of events in the trace log.
	 *
	 * @var int|float|null
	 */
	public $eventCount;

	/**
	 * A number in range [0..1] that indicates the used size of event buffer as a fraction of its total size.
	 *
	 * @var int|float|null
	 */
	public $value;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->percentFull)) {
			$instance->percentFull = $data->percentFull;
		}
		if (isset($data->eventCount)) {
			$instance->eventCount = $data->eventCount;
		}
		if (isset($data->value)) {
			$instance->value = $data->value;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->percentFull !== null) {
			$data->percentFull = $this->percentFull;
		}
		if ($this->eventCount !== null) {
			$data->eventCount = $this->eventCount;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		return $data;
	}
}
