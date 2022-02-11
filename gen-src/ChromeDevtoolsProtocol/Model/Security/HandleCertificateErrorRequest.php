<?php

namespace ChromeDevtoolsProtocol\Model\Security;

/**
 * Request for Security.handleCertificateError command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HandleCertificateErrorRequest implements \JsonSerializable
{
	/**
	 * The ID of the event.
	 *
	 * @var int
	 */
	public $eventId;

	/**
	 * The action to take on the certificate error.
	 *
	 * @var string
	 */
	public $action;


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
		if (isset($data->action)) {
			$instance->action = (string)$data->action;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->eventId !== null) {
			$data->eventId = $this->eventId;
		}
		if ($this->action !== null) {
			$data->action = $this->action;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return HandleCertificateErrorRequestBuilder
	 */
	public static function builder(): HandleCertificateErrorRequestBuilder
	{
		return new HandleCertificateErrorRequestBuilder();
	}
}
