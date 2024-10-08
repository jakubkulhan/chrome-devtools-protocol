<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

/**
 * Key range.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class KeyRange implements \JsonSerializable
{
	/**
	 * Lower bound.
	 *
	 * @var Key|null
	 */
	public $lower;

	/**
	 * Upper bound.
	 *
	 * @var Key|null
	 */
	public $upper;

	/**
	 * If true lower bound is open.
	 *
	 * @var bool
	 */
	public $lowerOpen;

	/**
	 * If true upper bound is open.
	 *
	 * @var bool
	 */
	public $upperOpen;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->lower)) {
			$instance->lower = Key::fromJson($data->lower);
		}
		if (isset($data->upper)) {
			$instance->upper = Key::fromJson($data->upper);
		}
		if (isset($data->lowerOpen)) {
			$instance->lowerOpen = (bool)$data->lowerOpen;
		}
		if (isset($data->upperOpen)) {
			$instance->upperOpen = (bool)$data->upperOpen;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->lower !== null) {
			$data->lower = $this->lower->jsonSerialize();
		}
		if ($this->upper !== null) {
			$data->upper = $this->upper->jsonSerialize();
		}
		if ($this->lowerOpen !== null) {
			$data->lowerOpen = $this->lowerOpen;
		}
		if ($this->upperOpen !== null) {
			$data->upperOpen = $this->upperOpen;
		}
		return $data;
	}
}
