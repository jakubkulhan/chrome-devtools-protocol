<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Request for Target.detachFromTarget command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DetachFromTargetRequest implements \JsonSerializable
{
	/**
	 * Session to detach.
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
	 * @return DetachFromTargetRequestBuilder
	 */
	public static function builder(): DetachFromTargetRequestBuilder
	{
		return new DetachFromTargetRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
