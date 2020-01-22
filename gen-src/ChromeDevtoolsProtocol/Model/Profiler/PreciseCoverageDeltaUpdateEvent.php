<?php

namespace ChromeDevtoolsProtocol\Model\Profiler;

/**
 * Reports coverage delta since the last poll (either from an event like this, or from `takePreciseCoverage` for the current isolate. May only be sent if precise code coverage has been started. This event can be trigged by the embedder to, for example, trigger collection of coverage data immediatelly at a certain point in time.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PreciseCoverageDeltaUpdateEvent implements \JsonSerializable
{
	/**
	 * Monotonically increasing time (in seconds) when the coverage update was taken in the backend.
	 *
	 * @var int|float
	 */
	public $timestamp;

	/**
	 * Identifier for distinguishing coverage events.
	 *
	 * @var string
	 */
	public $occassion;

	/**
	 * Coverage data for the current isolate.
	 *
	 * @var ScriptCoverage[]
	 */
	public $result;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		if (isset($data->occassion)) {
			$instance->occassion = (string)$data->occassion;
		}
		if (isset($data->result)) {
			$instance->result = [];
			foreach ($data->result as $item) {
				$instance->result[] = ScriptCoverage::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		if ($this->occassion !== null) {
			$data->occassion = $this->occassion;
		}
		if ($this->result !== null) {
			$data->result = [];
			foreach ($this->result as $item) {
				$data->result[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
