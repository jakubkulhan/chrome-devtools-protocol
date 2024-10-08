<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

use ChromeDevtoolsProtocol\Model\Runtime\CallFrame;

/**
 * Sampling Heap Profile node. Holds callsite information, allocation statistics and child nodes.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SamplingHeapProfileNode implements \JsonSerializable
{
	/**
	 * Function location.
	 *
	 * @var CallFrame
	 */
	public $callFrame;

	/**
	 * Allocations size in bytes for the node excluding children.
	 *
	 * @var int|float
	 */
	public $selfSize;

	/**
	 * Node id. Ids are unique across all profiles collected between startSampling and stopSampling.
	 *
	 * @var int
	 */
	public $id;

	/**
	 * Child nodes.
	 *
	 * @var SamplingHeapProfileNode[]
	 */
	public $children;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->callFrame)) {
			$instance->callFrame = CallFrame::fromJson($data->callFrame);
		}
		if (isset($data->selfSize)) {
			$instance->selfSize = $data->selfSize;
		}
		if (isset($data->id)) {
			$instance->id = (int)$data->id;
		}
		if (isset($data->children)) {
			$instance->children = [];
			foreach ($data->children as $item) {
				$instance->children[] = SamplingHeapProfileNode::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->callFrame !== null) {
			$data->callFrame = $this->callFrame->jsonSerialize();
		}
		if ($this->selfSize !== null) {
			$data->selfSize = $this->selfSize;
		}
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->children !== null) {
			$data->children = [];
			foreach ($this->children as $item) {
				$data->children[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
