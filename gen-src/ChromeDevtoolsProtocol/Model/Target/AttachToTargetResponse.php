<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Response to Target.attachToTarget command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttachToTargetResponse implements \JsonSerializable
{
	/**
	 * Id assigned to the session.
	 *
	 * @var string
	 */
	public $sessionId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->sessionId)) {
			$instance->sessionId = (string)$data->sessionId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sessionId !== null) {
			$data->sessionId = $this->sessionId;
		}
		return $data;
	}
}
