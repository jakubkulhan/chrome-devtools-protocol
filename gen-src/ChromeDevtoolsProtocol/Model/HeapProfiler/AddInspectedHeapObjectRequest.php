<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * Request for HeapProfiler.addInspectedHeapObject command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddInspectedHeapObjectRequest implements \JsonSerializable
{
	/**
	 * Heap snapshot object id to be accessible by means of $x command line API.
	 *
	 * @var string
	 */
	public $heapObjectId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->heapObjectId)) {
			$instance->heapObjectId = (string)$data->heapObjectId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->heapObjectId !== null) {
			$data->heapObjectId = $this->heapObjectId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return AddInspectedHeapObjectRequestBuilder
	 */
	public static function builder(): AddInspectedHeapObjectRequestBuilder
	{
		return new AddInspectedHeapObjectRequestBuilder();
	}
}
