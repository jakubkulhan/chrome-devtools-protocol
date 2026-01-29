<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Fired when |SCardGetStatusChange| is called. Timeout is specified in milliseconds. This maps to: PC/SC Lite: https://pcsclite.apdu.fr/api/group__API.html#ga33247d5d1257d59e55647c3bb717db24 Microsoft: https://learn.microsoft.com/en-us/windows/win32/api/winscard/nf-winscard-scardgetstatuschangea
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetStatusChangeRequestedEvent implements \JsonSerializable
{
	/** @var string */
	public $requestId;

	/** @var int */
	public $contextId;

	/** @var ReaderStateIn[] */
	public $readerStates;

	/**
	 * in milliseconds, if absent, it means "infinite"
	 *
	 * @var int|null
	 */
	public $timeout;


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
		if (isset($data->readerStates)) {
			$instance->readerStates = [];
			foreach ($data->readerStates as $item) {
				$instance->readerStates[] = ReaderStateIn::fromJson($item);
			}
		}
		if (isset($data->timeout)) {
			$instance->timeout = (int)$data->timeout;
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
		if ($this->readerStates !== null) {
			$data->readerStates = [];
			foreach ($this->readerStates as $item) {
				$data->readerStates[] = $item->jsonSerialize();
			}
		}
		if ($this->timeout !== null) {
			$data->timeout = $this->timeout;
		}
		return $data;
	}
}
