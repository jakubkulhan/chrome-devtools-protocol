<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * Sampling profile.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SamplingHeapProfile implements \JsonSerializable
{
	/** @var SamplingHeapProfileNode */
	public $head;

	/** @var SamplingHeapProfileSample[] */
	public $samples;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->head)) {
			$instance->head = SamplingHeapProfileNode::fromJson($data->head);
		}
		if (isset($data->samples)) {
			$instance->samples = [];
			foreach ($data->samples as $item) {
				$instance->samples[] = SamplingHeapProfileSample::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->head !== null) {
			$data->head = $this->head->jsonSerialize();
		}
		if ($this->samples !== null) {
			$data->samples = [];
			foreach ($this->samples as $item) {
				$data->samples[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
