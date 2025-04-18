<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.setProtectedAudienceKAnonymity command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetProtectedAudienceKAnonymityRequest implements \JsonSerializable
{
	/** @var string */
	public $owner;

	/** @var string */
	public $name;

	/** @var string[] */
	public $hashes;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->owner)) {
			$instance->owner = (string)$data->owner;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->hashes)) {
			$instance->hashes = [];
			foreach ($data->hashes as $item) {
				$instance->hashes[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->owner !== null) {
			$data->owner = $this->owner;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->hashes !== null) {
			$data->hashes = [];
			foreach ($this->hashes as $item) {
				$data->hashes[] = $item;
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetProtectedAudienceKAnonymityRequestBuilder
	 */
	public static function builder(): SetProtectedAudienceKAnonymityRequestBuilder
	{
		return new SetProtectedAudienceKAnonymityRequestBuilder();
	}
}
