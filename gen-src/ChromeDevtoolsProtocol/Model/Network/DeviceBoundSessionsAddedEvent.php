<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Triggered when the initial set of device bound sessions is added.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeviceBoundSessionsAddedEvent implements \JsonSerializable
{
	/**
	 * The device bound sessions.
	 *
	 * @var DeviceBoundSession[]
	 */
	public $sessions;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->sessions)) {
			$instance->sessions = [];
			foreach ($data->sessions as $item) {
				$instance->sessions[] = DeviceBoundSession::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sessions !== null) {
			$data->sessions = [];
			foreach ($this->sessions as $item) {
				$data->sessions[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
