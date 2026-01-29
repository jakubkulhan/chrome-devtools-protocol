<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Fired when |SCardListReaders| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga93b07815789b3cf2629d439ecf20f0d9 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardlistreadersa
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ListReadersRequestedEvent implements \JsonSerializable
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
