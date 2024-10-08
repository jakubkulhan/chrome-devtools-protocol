<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Model\Runtime\RemoteObject;

/**
 * Response to DOM.resolveNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ResolveNodeResponse implements \JsonSerializable
{
	/**
	 * JavaScript object wrapper for given node.
	 *
	 * @var RemoteObject
	 */
	public $object;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->object)) {
			$instance->object = RemoteObject::fromJson($data->object);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->object !== null) {
			$data->object = $this->object->jsonSerialize();
		}
		return $data;
	}
}
