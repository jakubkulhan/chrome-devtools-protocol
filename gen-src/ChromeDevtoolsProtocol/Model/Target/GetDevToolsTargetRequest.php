<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Request for Target.getDevToolsTarget command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetDevToolsTargetRequest implements \JsonSerializable
{
	/**
	 * Page or tab target ID.
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
		if (isset($data->targetId)) {
			$instance->targetId = (string)$data->targetId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->targetId !== null) {
			$data->targetId = $this->targetId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetDevToolsTargetRequestBuilder
	 */
	public static function builder(): GetDevToolsTargetRequestBuilder
	{
		return new GetDevToolsTargetRequestBuilder();
	}
}
