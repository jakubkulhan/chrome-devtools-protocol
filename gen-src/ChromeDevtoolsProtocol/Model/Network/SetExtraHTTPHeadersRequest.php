<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.setExtraHTTPHeaders command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetExtraHTTPHeadersRequest implements \JsonSerializable
{
	/**
	 * Map with extra HTTP headers.
	 *
	 * @var Headers
	 */
	public $headers;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->headers)) {
			$instance->headers = Headers::fromJson($data->headers);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->headers !== null) {
			$data->headers = $this->headers->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetExtraHTTPHeadersRequestBuilder
	 */
	public static function builder(): SetExtraHTTPHeadersRequestBuilder
	{
		return new SetExtraHTTPHeadersRequestBuilder();
	}
}
