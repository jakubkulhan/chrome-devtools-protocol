<?php

namespace ChromeDevtoolsProtocol\Model\Performance;

/**
 * Run-time execution metric.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Metric implements \JsonSerializable
{
	/**
	 * Metric name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Metric value.
	 *
	 * @var int|float
	 */
	public $value;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->value)) {
			$instance->value = $data->value;
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
		return $data;
	}
}
