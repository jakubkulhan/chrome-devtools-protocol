<?php

namespace ChromeDevtoolsProtocol\Model\Profiler;

/**
 * Response to Profiler.getBestEffortCoverage command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetBestEffortCoverageResponse implements \JsonSerializable
{
	/**
	 * Coverage data for the current isolate.
	 *
	 * @var ScriptCoverage[]
	 */
	public $result;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
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
		if ($this->result !== null) {
			$data->result = [];
			foreach ($this->result as $item) {
				$data->result[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
