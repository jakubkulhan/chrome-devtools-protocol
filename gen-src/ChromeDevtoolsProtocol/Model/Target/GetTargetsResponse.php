<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Response to Target.getTargets command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetTargetsResponse implements \JsonSerializable
{
	/**
	 * The list of targets.
	 *
	 * @var TargetInfo[]
	 */
	public $targetInfos;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->targetInfos)) {
			$instance->targetInfos = [];
			foreach ($data->targetInfos as $item) {
				$instance->targetInfos[] = TargetInfo::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->targetInfos !== null) {
			$data->targetInfos = [];
			foreach ($this->targetInfos as $item) {
				$data->targetInfos[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
