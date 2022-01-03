<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Response to Target.getTargetInfo command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetTargetInfoResponse implements \JsonSerializable
{
	/** @var TargetInfo */
	public $targetInfo;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->targetInfo)) {
			$instance->targetInfo = TargetInfo::fromJson($data->targetInfo);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->targetInfo !== null) {
			$data->targetInfo = $this->targetInfo->jsonSerialize();
		}
		return $data;
	}
}
