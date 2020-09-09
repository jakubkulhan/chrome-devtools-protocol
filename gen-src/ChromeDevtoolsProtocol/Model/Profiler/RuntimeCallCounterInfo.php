<?php

namespace ChromeDevtoolsProtocol\Model\Profiler;

/**
 * Runtime call counter information.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RuntimeCallCounterInfo implements \JsonSerializable
{
	/**
	 * Counter name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Counter value.
	 *
	 * @var int|float
	 */
	public $value;

	/**
	 * Counter time in seconds.
	 *
	 * @var int|float
	 */
	public $time;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->value)) {
			$instance->value = $data->value;
		}
		if (isset($data->time)) {
			$instance->time = $data->time;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		if ($this->time !== null) {
			$data->time = $this->time;
		}
		return $data;
	}
}
