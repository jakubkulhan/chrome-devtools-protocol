<?php

namespace ChromeDevtoolsProtocol\Model\Security;

/**
 * There is a certificate error. If overriding certificate errors is enabled, then it should be handled with the `handleCertificateError` command. Note: this event does not fire if the certificate error has been allowed internally. Only one client per target should override certificate errors at the same time.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CertificateErrorEvent implements \JsonSerializable
{
	/**
	 * The ID of the event.
	 *
	 * @var int
	 */
	public $eventId;

	/**
	 * The type of the error.
	 *
	 * @var string
	 */
	public $errorType;

	/**
	 * The url that was requested.
	 *
	 * @var string
	 */
	public $requestURL;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->eventId)) {
			$instance->eventId = (int)$data->eventId;
		}
		if (isset($data->errorType)) {
			$instance->errorType = (string)$data->errorType;
		}
		if (isset($data->requestURL)) {
			$instance->requestURL = (string)$data->requestURL;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->eventId !== null) {
			$data->eventId = $this->eventId;
		}
		if ($this->errorType !== null) {
			$data->errorType = $this->errorType;
		}
		if ($this->requestURL !== null) {
			$data->requestURL = $this->requestURL;
		}
		return $data;
	}
}
