<?php
namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Information about a signed exchange response.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SignedExchangeInfo implements \JsonSerializable
{
	/**
	 * The outer response of signed HTTP exchange which was received from network.
	 *
	 * @var Response
	 */
	public $outerResponse;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->outerResponse)) {
			$instance->outerResponse = Response::fromJson($data->outerResponse);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->outerResponse !== null) {
			$data->outerResponse = $this->outerResponse->jsonSerialize();
		}
		return $data;
	}
}
