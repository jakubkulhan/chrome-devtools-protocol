<?php
namespace ChromeDevtoolsProtocol\Model\Memory;

/**
 * Heap profile sample.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SamplingProfileNode implements \JsonSerializable
{
	/**
	 * Size of the sampled allocation.
	 *
	 * @var int|float
	 */
	public $size;

	/**
	 * Number of sampled allocations of that size.
	 *
	 * @var int|float
	 */
	public $count;

	/**
	 * Execution stack at the point of allocation.
	 *
	 * @var string[]
	 */
	public $stack;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->size)) {
			$instance->size = $data->size;
		}
		if (isset($data->count)) {
			$instance->count = $data->count;
		}
		if (isset($data->stack)) {
			$instance->stack = [];
			foreach ($data->stack as $item) {
				$instance->stack[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->size !== null) {
			$data->size = $this->size;
		}
		if ($this->count !== null) {
			$data->count = $this->count;
		}
		if ($this->stack !== null) {
			$data->stack = [];
			foreach ($this->stack as $item) {
				$data->stack[] = $item;
			}
		}
		return $data;
	}
}
