<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Notifies about a new protocol message received from the session (as reported in `attachedToTarget` event).
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReceivedMessageFromTargetEvent implements \JsonSerializable
{
	/**
	 * Identifier of a session which sends a message.
	 *
	 * @var string
	 */
	public $sessionId;

	/** @var string */
	public $message;

	/**
	 * Deprecated.
	 *
	 * @var string
	 */
	public $targetId;


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
		if (isset($data->message)) {
			$instance->message = (string)$data->message;
		}
		if (isset($data->targetId)) {
			$instance->targetId = (string)$data->targetId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sessionId !== null) {
			$data->sessionId = $this->sessionId;
		}
		if ($this->message !== null) {
			$data->message = $this->message;
		}
		if ($this->targetId !== null) {
			$data->targetId = $this->targetId;
		}
		return $data;
	}
}
