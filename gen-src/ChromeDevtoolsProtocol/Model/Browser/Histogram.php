<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Chrome histogram.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Histogram implements \JsonSerializable
{
	/**
	 * Name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Sum of sample values.
	 *
	 * @var int
	 */
	public $sum;

	/**
	 * Total number of samples.
	 *
	 * @var int
	 */
	public $count;

	/**
	 * Buckets.
	 *
	 * @var Bucket[]
	 */
	public $buckets;


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
		if (isset($data->sum)) {
			$instance->sum = (int)$data->sum;
		}
		if (isset($data->count)) {
			$instance->count = (int)$data->count;
		}
		if (isset($data->buckets)) {
			$instance->buckets = [];
			foreach ($data->buckets as $item) {
				$instance->buckets[] = Bucket::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->sum !== null) {
			$data->sum = $this->sum;
		}
		if ($this->count !== null) {
			$data->count = $this->count;
		}
		if ($this->buckets !== null) {
			$data->buckets = [];
			foreach ($this->buckets as $item) {
				$data->buckets[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
