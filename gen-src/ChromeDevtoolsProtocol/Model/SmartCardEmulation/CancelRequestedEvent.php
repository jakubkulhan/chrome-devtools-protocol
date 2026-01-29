<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Fired when |SCardCancel| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#gaacbbc0c6d6c0cbbeb4f4debf6fbeeee6 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardcancel
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CancelRequestedEvent implements \JsonSerializable
{
	/** @var string */
	public $requestId;

	/** @var int */
	public $contextId;


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
		if (isset($data->contextId)) {
			$instance->contextId = (int)$data->contextId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->contextId !== null) {
			$data->contextId = $this->contextId;
		}
		return $data;
	}
}
