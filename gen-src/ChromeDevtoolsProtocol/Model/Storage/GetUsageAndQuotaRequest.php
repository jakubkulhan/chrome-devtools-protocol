<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.getUsageAndQuota command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetUsageAndQuotaRequest implements \JsonSerializable
{
	/**
	 * Security origin.
	 *
	 * @var string
	 */
	public $origin;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetUsageAndQuotaRequestBuilder
	 */
	public static function builder(): GetUsageAndQuotaRequestBuilder
	{
		return new GetUsageAndQuotaRequestBuilder();
	}
}
