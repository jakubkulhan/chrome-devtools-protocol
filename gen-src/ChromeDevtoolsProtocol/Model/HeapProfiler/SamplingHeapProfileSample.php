<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * A single sample from a sampling profile.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SamplingHeapProfileSample implements \JsonSerializable
{
	/**
	 * Allocation size in bytes attributed to the sample.
	 *
	 * @var int|float
	 */
	public $size;

	/**
	 * Id of the corresponding profile tree node.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Time-ordered sample ordinal number. It is unique across all profiles retrieved between startSampling and stopSampling.
	 *
	 * @var int|float
	 */
	public $ordinal;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->size)) {
			$instance->size = $data->size;
		}
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->ordinal)) {
			$instance->ordinal = $data->ordinal;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->size !== null) {
			$data->size = $this->size;
		}
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->ordinal !== null) {
			$data->ordinal = $this->ordinal;
		}
		return $data;
	}
}
