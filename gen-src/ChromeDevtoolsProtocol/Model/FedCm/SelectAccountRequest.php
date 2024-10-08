<?php

namespace ChromeDevtoolsProtocol\Model\FedCm;

/**
 * Request for FedCm.selectAccount command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SelectAccountRequest implements \JsonSerializable
{
	/** @var string */
	public $dialogId;

	/** @var int */
	public $accountIndex;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->dialogId)) {
			$instance->dialogId = (string)$data->dialogId;
		}
		if (isset($data->accountIndex)) {
			$instance->accountIndex = (int)$data->accountIndex;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->dialogId !== null) {
			$data->dialogId = $this->dialogId;
		}
		if ($this->accountIndex !== null) {
			$data->accountIndex = $this->accountIndex;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SelectAccountRequestBuilder
	 */
	public static function builder(): SelectAccountRequestBuilder
	{
		return new SelectAccountRequestBuilder();
	}
}
