<?php
namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * Profile.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SamplingHeapProfile implements \JsonSerializable
{
	/** @var SamplingHeapProfileNode */
	public $head;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->head)) {
			$instance->head = SamplingHeapProfileNode::fromJson($data->head);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->head !== null) {
			$data->head = $this->head->jsonSerialize();
		}
		return $data;
	}
}
