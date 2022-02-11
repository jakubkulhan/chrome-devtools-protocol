<?php

namespace ChromeDevtoolsProtocol\Model\Log;

/**
 * Violation configuration setting.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ViolationSetting implements \JsonSerializable
{
	/**
	 * Violation type.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Time threshold to trigger upon.
	 *
	 * @var int|float
	 */
	public $threshold;


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
		if (isset($data->threshold)) {
			$instance->threshold = $data->threshold;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->threshold !== null) {
			$data->threshold = $this->threshold;
		}
		return $data;
	}
}
