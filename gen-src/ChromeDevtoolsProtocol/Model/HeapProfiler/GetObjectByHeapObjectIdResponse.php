<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

use ChromeDevtoolsProtocol\Model\Runtime\RemoteObject;

/**
 * Response to HeapProfiler.getObjectByHeapObjectId command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetObjectByHeapObjectIdResponse implements \JsonSerializable
{
	/**
	 * Evaluation result.
	 *
	 * @var RemoteObject
	 */
	public $result;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->result)) {
			$instance->result = RemoteObject::fromJson($data->result);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->result !== null) {
			$data->result = $this->result->jsonSerialize();
		}
		return $data;
	}
}
