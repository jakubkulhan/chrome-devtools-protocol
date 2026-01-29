<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Maps to the |SCARD_PROTOCOL_*| flags.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ProtocolSet implements \JsonSerializable
{
	/** @var bool|null */
	public $t0;

	/** @var bool|null */
	public $t1;

	/** @var bool|null */
	public $raw;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->t0)) {
			$instance->t0 = (bool)$data->t0;
		}
		if (isset($data->t1)) {
			$instance->t1 = (bool)$data->t1;
		}
		if (isset($data->raw)) {
			$instance->raw = (bool)$data->raw;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->t0 !== null) {
			$data->t0 = $this->t0;
		}
		if ($this->t1 !== null) {
			$data->t1 = $this->t1;
		}
		if ($this->raw !== null) {
			$data->raw = $this->raw;
		}
		return $data;
	}
}
