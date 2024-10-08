<?php

namespace ChromeDevtoolsProtocol\Model\PWA;

/**
 * Response to PWA.launchFilesInApp command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LaunchFilesInAppResponse implements \JsonSerializable
{
	/**
	 * IDs of the tab targets created as the result.
	 *
	 * @var string[]
	 */
	public $targetIds;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->targetIds)) {
			$instance->targetIds = [];
		if (isset($data->targetIds)) {
			$instance->targetIds = [];
			foreach ($data->targetIds as $item) {
				$instance->targetIds[] = (string)$item;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->targetIds !== null) {
			$data->targetIds = [];
		if ($this->targetIds !== null) {
			$data->targetIds = [];
			foreach ($this->targetIds as $item) {
				$data->targetIds[] = $item;
			}
		}
		}
		return $data;
	}
}
