<?php

namespace ChromeDevtoolsProtocol\Model\Memory;

/**
 * Request for Memory.simulatePressureNotification command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SimulatePressureNotificationRequest implements \JsonSerializable
{
	/**
	 * Memory pressure level of the notification.
	 *
	 * @var string
	 */
	public $level;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->level)) {
			$instance->level = (string)$data->level;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->level !== null) {
			$data->level = $this->level;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SimulatePressureNotificationRequestBuilder
	 */
	public static function builder(): SimulatePressureNotificationRequestBuilder
	{
		return new SimulatePressureNotificationRequestBuilder();
	}
}
