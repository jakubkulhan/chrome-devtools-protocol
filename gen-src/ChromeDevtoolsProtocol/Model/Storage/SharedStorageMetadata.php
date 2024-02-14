<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Details for an origin's shared storage.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SharedStorageMetadata implements \JsonSerializable
{
	/**
	 * Time when the origin's shared storage was last created.
	 *
	 * @var int|float
	 */
	public $creationTime;

	/**
	 * Number of key-value pairs stored in origin's shared storage.
	 *
	 * @var int
	 */
	public $length;

	/**
	 * Current amount of bits of entropy remaining in the navigation budget.
	 *
	 * @var int|float
	 */
	public $remainingBudget;

	/**
	 * Total number of bytes stored as key-value pairs in origin's shared storage.
	 *
	 * @var int
	 */
	public $bytesUsed;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->creationTime)) {
			$instance->creationTime = $data->creationTime;
		}
		if (isset($data->length)) {
			$instance->length = (int)$data->length;
		}
		if (isset($data->remainingBudget)) {
			$instance->remainingBudget = $data->remainingBudget;
		}
		if (isset($data->bytesUsed)) {
			$instance->bytesUsed = (int)$data->bytesUsed;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->creationTime !== null) {
			$data->creationTime = $this->creationTime;
		}
		if ($this->length !== null) {
			$data->length = $this->length;
		}
		if ($this->remainingBudget !== null) {
			$data->remainingBudget = $this->remainingBudget;
		}
		if ($this->bytesUsed !== null) {
			$data->bytesUsed = $this->bytesUsed;
		}
		return $data;
	}
}
