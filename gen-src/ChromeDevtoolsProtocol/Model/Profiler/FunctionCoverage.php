<?php

namespace ChromeDevtoolsProtocol\Model\Profiler;

/**
 * Coverage data for a JavaScript function.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FunctionCoverage implements \JsonSerializable
{
	/**
	 * JavaScript function name.
	 *
	 * @var string
	 */
	public $functionName;

	/**
	 * Source ranges inside the function with coverage data.
	 *
	 * @var CoverageRange[]
	 */
	public $ranges;

	/**
	 * Whether coverage data for this function has block granularity.
	 *
	 * @var bool
	 */
	public $isBlockCoverage;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->functionName)) {
			$instance->functionName = (string)$data->functionName;
		}
		if (isset($data->ranges)) {
			$instance->ranges = [];
			foreach ($data->ranges as $item) {
				$instance->ranges[] = CoverageRange::fromJson($item);
			}
		}
		if (isset($data->isBlockCoverage)) {
			$instance->isBlockCoverage = (bool)$data->isBlockCoverage;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->functionName !== null) {
			$data->functionName = $this->functionName;
		}
		if ($this->ranges !== null) {
			$data->ranges = [];
			foreach ($this->ranges as $item) {
				$data->ranges[] = $item->jsonSerialize();
			}
		}
		if ($this->isBlockCoverage !== null) {
			$data->isBlockCoverage = $this->isBlockCoverage;
		}
		return $data;
	}
}
