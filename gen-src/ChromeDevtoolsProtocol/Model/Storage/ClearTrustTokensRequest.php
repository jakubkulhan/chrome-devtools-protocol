<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.clearTrustTokens command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ClearTrustTokensRequest implements \JsonSerializable
{
	/** @var string */
	public $issuerOrigin;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->issuerOrigin)) {
			$instance->issuerOrigin = (string)$data->issuerOrigin;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->issuerOrigin !== null) {
			$data->issuerOrigin = $this->issuerOrigin;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ClearTrustTokensRequestBuilder
	 */
	public static function builder(): ClearTrustTokensRequestBuilder
	{
		return new ClearTrustTokensRequestBuilder();
	}
}
