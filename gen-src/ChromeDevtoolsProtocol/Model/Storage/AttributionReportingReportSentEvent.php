<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionReportingReportSentEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingReportSentEvent implements \JsonSerializable
{
	/** @var string */
	public $url;

	/** @var object */
	public $body;

	/** @var string */
	public $result;

	/**
	 * If result is `sent`, populated with net/HTTP status.
	 *
	 * @var int|null
	 */
	public $netError;

	/** @var string|null */
	public $netErrorName;

	/** @var int|null */
	public $httpStatusCode;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->body)) {
			$instance->body = $data->body;
		}
		if (isset($data->result)) {
			$instance->result = (string)$data->result;
		}
		if (isset($data->netError)) {
			$instance->netError = (int)$data->netError;
		}
		if (isset($data->netErrorName)) {
			$instance->netErrorName = (string)$data->netErrorName;
		}
		if (isset($data->httpStatusCode)) {
			$instance->httpStatusCode = (int)$data->httpStatusCode;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->body !== null) {
			$data->body = $this->body;
		}
		if ($this->result !== null) {
			$data->result = $this->result;
		}
		if ($this->netError !== null) {
			$data->netError = $this->netError;
		}
		if ($this->netErrorName !== null) {
			$data->netErrorName = $this->netErrorName;
		}
		if ($this->httpStatusCode !== null) {
			$data->httpStatusCode = $this->httpStatusCode;
		}
		return $data;
	}
}
