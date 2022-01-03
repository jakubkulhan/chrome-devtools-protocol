<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Request for Runtime.releaseObject command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReleaseObjectRequest implements \JsonSerializable
{
	/**
	 * Identifier of the object to release.
	 *
	 * @var string
	 */
	public $objectId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->objectId)) {
			$instance->objectId = (string)$data->objectId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->objectId !== null) {
			$data->objectId = $this->objectId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ReleaseObjectRequestBuilder
	 */
	public static function builder(): ReleaseObjectRequestBuilder
	{
		return new ReleaseObjectRequestBuilder();
	}
}
