<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Named type Emulation.PressureMetadata.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PressureMetadata implements \JsonSerializable
{
	/** @var bool|null */
	public $available;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->available !== null) {
			$data->available = $this->available;
		}
		return $data;
	}
}
