<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Chrome histogram bucket.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Bucket implements \JsonSerializable
{
	/**
	 * Minimum value (inclusive).
	 *
	 * @var int
	 */
	public $low;

	/**
	 * Maximum value (exclusive).
	 *
	 * @var int
	 */
	public $high;

	/**
	 * Number of samples.
	 *
	 * @var int
	 */
	public $count;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->low)) {
			$instance->low = (int)$data->low;
		}
		if (isset($data->high)) {
			$instance->high = (int)$data->high;
		}
		if (isset($data->count)) {
			$instance->count = (int)$data->count;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->low !== null) {
			$data->low = $this->low;
		}
		if ($this->high !== null) {
			$data->high = $this->high;
		}
		if ($this->count !== null) {
			$data->count = $this->count;
		}
		return $data;
	}
}
