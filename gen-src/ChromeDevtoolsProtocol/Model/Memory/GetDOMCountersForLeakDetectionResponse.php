<?php

namespace ChromeDevtoolsProtocol\Model\Memory;

/**
 * Response to Memory.getDOMCountersForLeakDetection command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetDOMCountersForLeakDetectionResponse implements \JsonSerializable
{
	/**
	 * DOM object counters.
	 *
	 * @var DOMCounter[]
	 */
	public $counters;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->counters)) {
			$instance->counters = [];
			foreach ($data->counters as $item) {
				$instance->counters[] = DOMCounter::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->counters !== null) {
			$data->counters = [];
			foreach ($this->counters as $item) {
				$data->counters[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
