<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Issued when attached to target because of auto-attach or `attachToTarget` command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttachedToTargetEvent implements \JsonSerializable
{
	/**
	 * Identifier assigned to the session used to send/receive messages.
	 *
	 * @var string
	 */
	public $sessionId;

	/** @var TargetInfo */
	public $targetInfo;

	/** @var bool */
	public $waitingForDebugger;


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
		if (isset($data->targetInfo)) {
			$instance->targetInfo = TargetInfo::fromJson($data->targetInfo);
		}
		if (isset($data->waitingForDebugger)) {
			$instance->waitingForDebugger = (bool)$data->waitingForDebugger;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sessionId !== null) {
			$data->sessionId = $this->sessionId;
		}
		if ($this->targetInfo !== null) {
			$data->targetInfo = $this->targetInfo->jsonSerialize();
		}
		if ($this->waitingForDebugger !== null) {
			$data->waitingForDebugger = $this->waitingForDebugger;
		}
		return $data;
	}
}
