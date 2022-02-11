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

	/**
	 * Information about the signed exchange header.
	 *
	 * @var SignedExchangeHeader|null
	 */
	public $header;

	/**
	 * Security details for the signed exchange header.
	 *
	 * @var SecurityDetails|null
	 */
	public $securityDetails;

	/**
	 * Errors occurred while handling the signed exchagne.
	 *
	 * @var SignedExchangeError[]|null
	 */
	public $errors;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->outerResponse)) {
			$instance->outerResponse = Response::fromJson($data->outerResponse);
		}
		if (isset($data->header)) {
			$instance->header = SignedExchangeHeader::fromJson($data->header);
		}
		if (isset($data->securityDetails)) {
			$instance->securityDetails = SecurityDetails::fromJson($data->securityDetails);
		}
		if (isset($data->errors)) {
			$instance->errors = [];
			foreach ($data->errors as $item) {
				$instance->errors[] = SignedExchangeError::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->outerResponse !== null) {
			$data->outerResponse = $this->outerResponse->jsonSerialize();
		}
		if ($this->header !== null) {
			$data->header = $this->header->jsonSerialize();
		}
		if ($this->securityDetails !== null) {
			$data->securityDetails = $this->securityDetails->jsonSerialize();
		}
		if ($this->errors !== null) {
			$data->errors = [];
			foreach ($this->errors as $item) {
				$data->errors[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
