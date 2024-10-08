<?php

namespace ChromeDevtoolsProtocol\Model\SystemInfo;

/**
 * Response to SystemInfo.getProcessInfo command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetProcessInfoResponse implements \JsonSerializable
{
	/**
	 * An array of process info blocks.
	 *
	 * @var ProcessInfo[]
	 */
	public $processInfo;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->processInfo)) {
			$instance->processInfo = [];
			foreach ($data->processInfo as $item) {
				$instance->processInfo[] = ProcessInfo::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->processInfo !== null) {
			$data->processInfo = [];
			foreach ($this->processInfo as $item) {
				$data->processInfo[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
