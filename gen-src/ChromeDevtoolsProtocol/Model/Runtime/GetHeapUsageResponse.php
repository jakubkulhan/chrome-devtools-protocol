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
	 * Used JavaScript heap size in bytes.
	 *
	 * @var int|float
	 */
	public $usedSize;

	/**
	 * Allocated JavaScript heap size in bytes.
	 *
	 * @var int|float
	 */
	public $totalSize;

	/**
	 * Used size in bytes in the embedder's garbage-collected heap.
	 *
	 * @var int|float
	 */
	public $embedderHeapUsedSize;

	/**
	 * Size in bytes of backing storage for array buffers and external strings.
	 *
	 * @var int|float
	 */
	public $backingStorageSize;


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
		if (isset($data->embedderHeapUsedSize)) {
			$instance->embedderHeapUsedSize = $data->embedderHeapUsedSize;
		}
		if (isset($data->backingStorageSize)) {
			$instance->backingStorageSize = $data->backingStorageSize;
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
		if ($this->embedderHeapUsedSize !== null) {
			$data->embedderHeapUsedSize = $this->embedderHeapUsedSize;
		}
		if ($this->backingStorageSize !== null) {
			$data->backingStorageSize = $this->backingStorageSize;
		}
		return $data;
	}
}
