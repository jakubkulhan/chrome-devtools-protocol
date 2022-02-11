<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Used to specify User Agent Cient Hints to emulate. See https://wicg.github.io/ua-client-hints
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class UserAgentBrandVersion implements \JsonSerializable
{
	/** @var string */
	public $brand;

	/** @var string */
	public $version;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->brand)) {
			$instance->brand = (string)$data->brand;
		}
		if (isset($data->version)) {
			$instance->version = (string)$data->version;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->brand !== null) {
			$data->brand = $this->brand;
		}
		if ($this->version !== null) {
			$data->version = $this->version;
		}
		return $data;
	}
}
