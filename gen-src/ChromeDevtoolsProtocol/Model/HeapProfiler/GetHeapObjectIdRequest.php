<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * Request for HeapProfiler.getHeapObjectId command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetHeapObjectIdRequest implements \JsonSerializable
{
	/**
	 * Identifier of the object to get heap object id for.
	 *
	 * @var string
	 */
	public $objectId;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->objectId !== null) {
			$data->objectId = $this->objectId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetHeapObjectIdRequestBuilder
	 */
	public static function builder(): GetHeapObjectIdRequestBuilder
	{
		return new GetHeapObjectIdRequestBuilder();
	}
}
