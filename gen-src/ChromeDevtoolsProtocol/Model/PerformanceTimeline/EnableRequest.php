<?php

namespace ChromeDevtoolsProtocol\Model\PerformanceTimeline;

/**
 * Request for PerformanceTimeline.enable command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequest implements \JsonSerializable
{
	/**
	 * The types of event to report, as specified in https://w3c.github.io/performance-timeline/#dom-performanceentry-entrytype The specified filter overrides any previous filters, passing empty filter disables recording. Note that not all types exposed to the web platform are currently supported.
	 *
	 * @var string[]
	 */
	public $eventTypes;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->eventTypes)) {
			$instance->eventTypes = [];
			foreach ($data->eventTypes as $item) {
				$instance->eventTypes[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->eventTypes !== null) {
			$data->eventTypes = [];
			foreach ($this->eventTypes as $item) {
				$data->eventTypes[] = $item;
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return EnableRequestBuilder
	 */
	public static function builder(): EnableRequestBuilder
	{
		return new EnableRequestBuilder();
	}
}
