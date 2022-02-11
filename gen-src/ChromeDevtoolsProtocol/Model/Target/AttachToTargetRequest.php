<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Request for Target.attachToTarget command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttachToTargetRequest implements \JsonSerializable
{
	/** @var string */
	public $targetId;

	/**
	 * Enables "flat" access to the session via specifying sessionId attribute in the commands. We plan to make this the default, deprecate non-flattened mode, and eventually retire it. See crbug.com/991325.
	 *
	 * @var bool|null
	 */
	public $flatten;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->targetId)) {
			$instance->targetId = (string)$data->targetId;
		}
		if (isset($data->flatten)) {
			$instance->flatten = (bool)$data->flatten;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->targetId !== null) {
			$data->targetId = $this->targetId;
		}
		if ($this->flatten !== null) {
			$data->flatten = $this->flatten;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return AttachToTargetRequestBuilder
	 */
	public static function builder(): AttachToTargetRequestBuilder
	{
		return new AttachToTargetRequestBuilder();
	}
}
