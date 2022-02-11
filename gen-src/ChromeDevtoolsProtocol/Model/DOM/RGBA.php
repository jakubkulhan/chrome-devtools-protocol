<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * A structure holding an RGBA color.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RGBA implements \JsonSerializable
{
	/**
	 * The red component, in the [0-255] range.
	 *
	 * @var int
	 */
	public $r;

	/**
	 * The green component, in the [0-255] range.
	 *
	 * @var int
	 */
	public $g;

	/**
	 * The blue component, in the [0-255] range.
	 *
	 * @var int
	 */
	public $b;

	/**
	 * The alpha component, in the [0-1] range (default: 1).
	 *
	 * @var int|float|null
	 */
	public $a;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->r)) {
			$instance->r = (int)$data->r;
		}
		if (isset($data->g)) {
			$instance->g = (int)$data->g;
		}
		if (isset($data->b)) {
			$instance->b = (int)$data->b;
		}
		if (isset($data->a)) {
			$instance->a = $data->a;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->r !== null) {
			$data->r = $this->r;
		}
		if ($this->g !== null) {
			$data->g = $this->g;
		}
		if ($this->b !== null) {
			$data->b = $this->b;
		}
		if ($this->a !== null) {
			$data->a = $this->a;
		}
		return $data;
	}
}
