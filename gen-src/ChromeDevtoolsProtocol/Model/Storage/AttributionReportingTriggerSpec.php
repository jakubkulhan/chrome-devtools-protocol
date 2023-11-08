<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionReportingTriggerSpec.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingTriggerSpec implements \JsonSerializable
{
	/**
	 * number instead of integer because not all uint32 can be represented by int
	 *
	 * @var int[]|float[]
	 */
	public $triggerData;

	/** @var AttributionReportingEventReportWindows */
	public $eventReportWindows;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->triggerData)) {
			$instance->triggerData = [];
			foreach ($data->triggerData as $item) {
				$instance->triggerData[] = $item;
			}
		}
		if (isset($data->eventReportWindows)) {
			$instance->eventReportWindows = AttributionReportingEventReportWindows::fromJson($data->eventReportWindows);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->triggerData !== null) {
			$data->triggerData = [];
			foreach ($this->triggerData as $item) {
				$data->triggerData[] = $item;
			}
		}
		if ($this->eventReportWindows !== null) {
			$data->eventReportWindows = $this->eventReportWindows->jsonSerialize();
		}
		return $data;
	}
}
