<?php

namespace ChromeDevtoolsProtocol\Model\FedCm;

/**
 * Request for FedCm.clickDialogButton command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ClickDialogButtonRequest implements \JsonSerializable
{
	/** @var string */
	public $dialogId;

	/** @var string */
	public $dialogButton;


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
		if (isset($data->dialogButton)) {
			$instance->dialogButton = (string)$data->dialogButton;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->dialogId !== null) {
			$data->dialogId = $this->dialogId;
		}
		if ($this->dialogButton !== null) {
			$data->dialogButton = $this->dialogButton;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ClickDialogButtonRequestBuilder
	 */
	public static function builder(): ClickDialogButtonRequestBuilder
	{
		return new ClickDialogButtonRequestBuilder();
	}
}
