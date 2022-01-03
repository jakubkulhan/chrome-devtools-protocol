<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.getResponseBodyForInterception command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetResponseBodyForInterceptionRequest implements \JsonSerializable
{
	/**
	 * Identifier for the intercepted request to get body for.
	 *
	 * @var string
	 */
	public $interceptionId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->interceptionId)) {
			$instance->interceptionId = (string)$data->interceptionId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->interceptionId !== null) {
			$data->interceptionId = $this->interceptionId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetResponseBodyForInterceptionRequestBuilder
	 */
	public static function builder(): GetResponseBodyForInterceptionRequestBuilder
	{
		return new GetResponseBodyForInterceptionRequestBuilder();
	}
}
