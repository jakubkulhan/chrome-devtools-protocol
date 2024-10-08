<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.clearDataForOrigin command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ClearDataForOriginRequest implements \JsonSerializable
{
	/**
	 * Security origin.
	 *
	 * @var string
	 */
	public $origin;

	/**
	 * Comma separated list of StorageType to clear.
	 *
	 * @var string
	 */
	public $storageTypes;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		if (isset($data->storageTypes)) {
			$instance->storageTypes = (string)$data->storageTypes;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->storageTypes !== null) {
			$data->storageTypes = $this->storageTypes;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ClearDataForOriginRequestBuilder
	 */
	public static function builder(): ClearDataForOriginRequestBuilder
	{
		return new ClearDataForOriginRequestBuilder();
	}
}
