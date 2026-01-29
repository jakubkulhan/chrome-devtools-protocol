<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Fired when |SCardTransmit| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga9a2d77242a271310269065e64633ab99 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardtransmit
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TransmitRequestedEvent implements \JsonSerializable
{
	/** @var string */
	public $requestId;

	/** @var int */
	public $handle;

	/** @var string */
	public $data;

	/** @var string */
	public $protocol;


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
		if (isset($data->handle)) {
			$instance->handle = (int)$data->handle;
		}
		if (isset($data->data)) {
			$instance->data = (string)$data->data;
		}
		if (isset($data->protocol)) {
			$instance->protocol = (string)$data->protocol;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->handle !== null) {
			$data->handle = $this->handle;
		}
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		if ($this->protocol !== null) {
			$data->protocol = $this->protocol;
		}
		return $data;
	}
}
