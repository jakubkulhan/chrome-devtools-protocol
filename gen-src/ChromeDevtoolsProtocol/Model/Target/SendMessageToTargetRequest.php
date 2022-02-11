<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Request for Target.sendMessageToTarget command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SendMessageToTargetRequest implements \JsonSerializable
{
	/** @var string */
	public $message;

	/**
	 * Identifier of the session.
	 *
	 * @var string
	 */
	public $sessionId;

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
		if (isset($data->message)) {
			$instance->message = (string)$data->message;
		}
		if (isset($data->sessionId)) {
			$instance->sessionId = (string)$data->sessionId;
		}
		if (isset($data->targetId)) {
			$instance->targetId = (string)$data->targetId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->message !== null) {
			$data->message = $this->message;
		}
		if ($this->sessionId !== null) {
			$data->sessionId = $this->sessionId;
		}
		if ($this->targetId !== null) {
			$data->targetId = $this->targetId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SendMessageToTargetRequestBuilder
	 */
	public static function builder(): SendMessageToTargetRequestBuilder
	{
		return new SendMessageToTargetRequestBuilder();
	}
}
