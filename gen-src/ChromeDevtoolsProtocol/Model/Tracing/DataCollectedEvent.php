<?php

namespace ChromeDevtoolsProtocol\Model\Tracing;

/**
 * Contains a bucket of collected trace events. When tracing is stopped collected events will be sent as a sequence of dataCollected events followed by tracingComplete event.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DataCollectedEvent implements \JsonSerializable
{
	/** @var object[] */
	public $value;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->value)) {
			$instance->value = [];
			foreach ($data->value as $item) {
				$instance->value[] = $item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->value !== null) {
			$data->value = [];
			foreach ($this->value as $item) {
				$data->value[] = $item;
			}
		}
		return $data;
	}
}
