<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Fired when |SCardConnect| is called. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga4e515829752e0a8dbc4d630696a8d6a5 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardconnecta
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ConnectRequestedEvent implements \JsonSerializable
{
	/** @var string */
	public $requestId;

	/** @var int */
	public $contextId;

	/** @var string */
	public $reader;

	/** @var string */
	public $shareMode;

	/** @var ProtocolSet */
	public $preferredProtocols;


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
		if (isset($data->reader)) {
			$instance->reader = (string)$data->reader;
		}
		if (isset($data->shareMode)) {
			$instance->shareMode = (string)$data->shareMode;
		}
		if (isset($data->preferredProtocols)) {
			$instance->preferredProtocols = ProtocolSet::fromJson($data->preferredProtocols);
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
		if ($this->reader !== null) {
			$data->reader = $this->reader;
		}
		if ($this->shareMode !== null) {
			$data->shareMode = $this->shareMode;
		}
		if ($this->preferredProtocols !== null) {
			$data->preferredProtocols = $this->preferredProtocols->jsonSerialize();
		}
		return $data;
	}
}
