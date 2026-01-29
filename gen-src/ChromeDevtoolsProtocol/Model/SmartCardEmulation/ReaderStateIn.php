<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Named type SmartCardEmulation.ReaderStateIn.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReaderStateIn implements \JsonSerializable
{
	/** @var string */
	public $reader;

	/** @var ReaderStateFlags */
	public $currentState;

	/** @var int */
	public $currentInsertionCount;


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
		if (isset($data->currentState)) {
			$instance->currentState = ReaderStateFlags::fromJson($data->currentState);
		}
		if (isset($data->currentInsertionCount)) {
			$instance->currentInsertionCount = (int)$data->currentInsertionCount;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->reader !== null) {
			$data->reader = $this->reader;
		}
		if ($this->currentState !== null) {
			$data->currentState = $this->currentState->jsonSerialize();
		}
		if ($this->currentInsertionCount !== null) {
			$data->currentInsertionCount = $this->currentInsertionCount;
		}
		return $data;
	}
}
