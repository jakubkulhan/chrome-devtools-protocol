<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired once when parsing the .wbn file has failed.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SubresourceWebBundleMetadataErrorEvent implements \JsonSerializable
{
	/**
	 * Request identifier. Used to match this information to another event.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * Error message
	 *
	 * @var string
	 */
	public $errorMessage;


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
		if (isset($data->errorMessage)) {
			$instance->errorMessage = (string)$data->errorMessage;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->errorMessage !== null) {
			$data->errorMessage = $this->errorMessage;
		}
		return $data;
	}
}
