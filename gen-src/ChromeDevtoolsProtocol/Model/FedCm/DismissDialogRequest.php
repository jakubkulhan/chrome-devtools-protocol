<?php

namespace ChromeDevtoolsProtocol\Model\FedCm;

/**
 * Request for FedCm.dismissDialog command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DismissDialogRequest implements \JsonSerializable
{
	/** @var string */
	public $dialogId;

	/** @var bool|null */
	public $triggerCooldown;


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
		if (isset($data->triggerCooldown)) {
			$instance->triggerCooldown = (bool)$data->triggerCooldown;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->dialogId !== null) {
			$data->dialogId = $this->dialogId;
		}
		if ($this->triggerCooldown !== null) {
			$data->triggerCooldown = $this->triggerCooldown;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DismissDialogRequestBuilder
	 */
	public static function builder(): DismissDialogRequestBuilder
	{
		return new DismissDialogRequestBuilder();
	}
}
