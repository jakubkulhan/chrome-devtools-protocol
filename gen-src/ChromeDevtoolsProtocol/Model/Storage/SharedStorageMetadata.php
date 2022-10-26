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
	/** @var int|float */
	public $creationTime;

	/** @var int */
	public $length;

	/** @var int|float */
	public $remainingBudget;


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
		return $data;
	}
}
