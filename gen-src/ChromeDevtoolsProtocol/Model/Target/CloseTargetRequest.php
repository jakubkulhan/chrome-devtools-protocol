<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Request for Target.closeTarget command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CloseTargetRequest implements \JsonSerializable
{
	/** @var string */
	public $targetId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->targetId)) {
			$instance->targetId = (string)$data->targetId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
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
	 * @return CloseTargetRequestBuilder
	 */
	public static function builder(): CloseTargetRequestBuilder
	{
		return new CloseTargetRequestBuilder();
	}
}
