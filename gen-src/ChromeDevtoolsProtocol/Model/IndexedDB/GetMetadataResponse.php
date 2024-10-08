<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

/**
 * Response to IndexedDB.getMetadata command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetMetadataResponse implements \JsonSerializable
{
	/**
	 * the entries count
	 *
	 * @var int|float
	 */
	public $entriesCount;

	/**
	 * the current value of key generator, to become the next inserted key into the object store. Valid if objectStore.autoIncrement is true.
	 *
	 * @var int|float
	 */
	public $keyGeneratorValue;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->entriesCount)) {
			$instance->entriesCount = $data->entriesCount;
		}
		if (isset($data->keyGeneratorValue)) {
			$instance->keyGeneratorValue = $data->keyGeneratorValue;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->entriesCount !== null) {
			$data->entriesCount = $this->entriesCount;
		}
		if ($this->keyGeneratorValue !== null) {
			$data->keyGeneratorValue = $this->keyGeneratorValue;
		}
		return $data;
	}
}
