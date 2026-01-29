<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Named type SmartCardEmulation.ReaderStateOut.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReaderStateOut implements \JsonSerializable
{
	/** @var string */
	public $reader;

	/** @var ReaderStateFlags */
	public $eventState;

	/** @var int */
	public $eventCount;

	/** @var string */
	public $atr;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->reader)) {
			$instance->reader = (string)$data->reader;
		}
		if (isset($data->eventState)) {
			$instance->eventState = ReaderStateFlags::fromJson($data->eventState);
		}
		if (isset($data->eventCount)) {
			$instance->eventCount = (int)$data->eventCount;
		}
		if (isset($data->atr)) {
			$instance->atr = (string)$data->atr;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->reader !== null) {
			$data->reader = $this->reader;
		}
		if ($this->eventState !== null) {
			$data->eventState = $this->eventState->jsonSerialize();
		}
		if ($this->eventCount !== null) {
			$data->eventCount = $this->eventCount;
		}
		if ($this->atr !== null) {
			$data->atr = $this->atr;
		}
		return $data;
	}
}
