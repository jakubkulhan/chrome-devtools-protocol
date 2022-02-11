<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

use ChromeDevtoolsProtocol\Model\Runtime\RemoteObject;

/**
 * Response to Animation.resolveAnimation command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ResolveAnimationResponse implements \JsonSerializable
{
	/**
	 * Corresponding remote object.
	 *
	 * @var RemoteObject
	 */
	public $remoteObject;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->remoteObject)) {
			$instance->remoteObject = RemoteObject::fromJson($data->remoteObject);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->remoteObject !== null) {
			$data->remoteObject = $this->remoteObject->jsonSerialize();
		}
		return $data;
	}
}
