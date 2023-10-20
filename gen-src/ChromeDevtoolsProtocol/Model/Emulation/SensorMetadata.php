<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Named type Emulation.SensorMetadata.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SensorMetadata implements \JsonSerializable
{
	/** @var bool|null */
	public $available;

	/** @var int|float|null */
	public $minimumFrequency;

	/** @var int|float|null */
	public $maximumFrequency;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->available)) {
			$instance->available = (bool)$data->available;
		}
		if (isset($data->minimumFrequency)) {
			$instance->minimumFrequency = $data->minimumFrequency;
		}
		if (isset($data->maximumFrequency)) {
			$instance->maximumFrequency = $data->maximumFrequency;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->available !== null) {
			$data->available = $this->available;
		}
		if ($this->minimumFrequency !== null) {
			$data->minimumFrequency = $this->minimumFrequency;
		}
		if ($this->maximumFrequency !== null) {
			$data->maximumFrequency = $this->maximumFrequency;
		}
		return $data;
	}
}
