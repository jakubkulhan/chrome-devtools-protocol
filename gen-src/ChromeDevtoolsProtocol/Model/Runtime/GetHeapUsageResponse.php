<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Response to Runtime.getHeapUsage command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetHeapUsageResponse implements \JsonSerializable
{
	/**
	 * Used heap size in bytes.
	 *
	 * @var int|float
	 */
	public $usedSize;

	/**
	 * Allocated heap size in bytes.
	 *
	 * @var int|float
	 */
	public $totalSize;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->usedSize)) {
			$instance->usedSize = $data->usedSize;
		}
		if (isset($data->totalSize)) {
			$instance->totalSize = $data->totalSize;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->usedSize !== null) {
			$data->usedSize = $this->usedSize;
		}
		if ($this->totalSize !== null) {
			$data->totalSize = $this->totalSize;
		}
		return $data;
	}
}
