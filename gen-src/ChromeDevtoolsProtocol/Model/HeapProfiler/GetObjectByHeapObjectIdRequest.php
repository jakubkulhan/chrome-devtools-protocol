<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * Request for HeapProfiler.getObjectByHeapObjectId command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetObjectByHeapObjectIdRequest implements \JsonSerializable
{
	/** @var string */
	public $objectId;

	/**
	 * Symbolic group name that can be used to release multiple objects.
	 *
	 * @var string|null
	 */
	public $objectGroup;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->objectId)) {
			$instance->objectId = (string)$data->objectId;
		}
		if (isset($data->objectGroup)) {
			$instance->objectGroup = (string)$data->objectGroup;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->objectId !== null) {
			$data->objectId = $this->objectId;
		}
		if ($this->objectGroup !== null) {
			$data->objectGroup = $this->objectGroup;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetObjectByHeapObjectIdRequestBuilder
	 */
	public static function builder(): GetObjectByHeapObjectIdRequestBuilder
	{
		return new GetObjectByHeapObjectIdRequestBuilder();
	}
}
