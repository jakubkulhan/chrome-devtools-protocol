<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Fired when |SCardDisconnect| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga4be198045c73ec0deb79e66c0ca1738a Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scarddisconnect
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DisconnectRequestedEvent implements \JsonSerializable
{
	/** @var string */
	public $requestId;

	/** @var int */
	public $handle;

	/** @var string */
	public $disposition;


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
		if (isset($data->disposition)) {
			$instance->disposition = (string)$data->disposition;
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
		if ($this->disposition !== null) {
			$data->disposition = $this->disposition;
		}
		return $data;
	}
}
