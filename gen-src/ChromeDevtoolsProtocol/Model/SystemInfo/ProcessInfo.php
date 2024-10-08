<?php

namespace ChromeDevtoolsProtocol\Model\SystemInfo;

/**
 * Represents process info.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ProcessInfo implements \JsonSerializable
{
	/**
	 * Specifies process type.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Specifies process id.
	 *
	 * @var int
	 */
	public $id;

	/**
	 * Specifies cumulative CPU usage in seconds across all threads of the process since the process start.
	 *
	 * @var int|float
	 */
	public $cpuTime;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->id)) {
			$instance->id = (int)$data->id;
		}
		if (isset($data->cpuTime)) {
			$instance->cpuTime = $data->cpuTime;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->cpuTime !== null) {
			$data->cpuTime = $this->cpuTime;
		}
		return $data;
	}
}
