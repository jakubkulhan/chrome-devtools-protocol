<?php

namespace ChromeDevtoolsProtocol\Model\FedCm;

/**
 * Request for FedCm.openUrl command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class OpenUrlRequest implements \JsonSerializable
{
	/** @var string */
	public $dialogId;

	/** @var int */
	public $accountIndex;

	/** @var string */
	public $accountUrlType;


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
		if (isset($data->accountUrlType)) {
			$instance->accountUrlType = (string)$data->accountUrlType;
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
		if ($this->accountUrlType !== null) {
			$data->accountUrlType = $this->accountUrlType;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return OpenUrlRequestBuilder
	 */
	public static function builder(): OpenUrlRequestBuilder
	{
		return new OpenUrlRequestBuilder();
	}
}
