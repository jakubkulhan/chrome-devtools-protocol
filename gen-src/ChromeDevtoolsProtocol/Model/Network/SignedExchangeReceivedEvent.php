<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when a signed exchange was received over the network
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SignedExchangeReceivedEvent implements \JsonSerializable
{
	/**
	 * Request identifier.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * Information about the signed exchange response.
	 *
	 * @var SignedExchangeInfo
	 */
	public $info;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->info)) {
			$instance->info = SignedExchangeInfo::fromJson($data->info);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->info !== null) {
			$data->info = $this->info->jsonSerialize();
		}
		return $data;
	}
}
