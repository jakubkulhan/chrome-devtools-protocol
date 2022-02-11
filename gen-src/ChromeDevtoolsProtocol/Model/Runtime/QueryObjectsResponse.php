<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Response to Runtime.queryObjects command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class QueryObjectsResponse implements \JsonSerializable
{
	/**
	 * Array with objects.
	 *
	 * @var RemoteObject
	 */
	public $objects;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->objects)) {
			$instance->objects = RemoteObject::fromJson($data->objects);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->objects !== null) {
			$data->objects = $this->objects->jsonSerialize();
		}
		return $data;
	}
}
