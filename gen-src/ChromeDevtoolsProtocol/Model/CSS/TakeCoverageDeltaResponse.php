<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.takeCoverageDelta command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TakeCoverageDeltaResponse implements \JsonSerializable
{
	/** @var RuleUsage[] */
	public $coverage;

	/**
	 * Monotonically increasing time, in seconds.
	 *
	 * @var int|float
	 */
	public $timestamp;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->coverage)) {
			$instance->coverage = [];
			foreach ($data->coverage as $item) {
				$instance->coverage[] = RuleUsage::fromJson($item);
			}
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->coverage !== null) {
			$data->coverage = [];
			foreach ($this->coverage as $item) {
				$data->coverage[] = $item->jsonSerialize();
			}
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		return $data;
	}
}
