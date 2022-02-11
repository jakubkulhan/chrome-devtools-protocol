<?php

namespace ChromeDevtoolsProtocol\Model\DOMDebugger;

/**
 * Response to DOMDebugger.getEventListeners command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetEventListenersResponse implements \JsonSerializable
{
	/**
	 * Array of relevant listeners.
	 *
	 * @var EventListener[]
	 */
	public $listeners;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->listeners)) {
			$instance->listeners = [];
			foreach ($data->listeners as $item) {
				$instance->listeners[] = EventListener::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->listeners !== null) {
			$data->listeners = [];
			foreach ($this->listeners as $item) {
				$data->listeners[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
