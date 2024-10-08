<?php

namespace ChromeDevtoolsProtocol\Model\FedCm;

/**
 * Triggered when a dialog is closed, either by user action, JS abort, or a command below.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DialogClosedEvent implements \JsonSerializable
{
	/** @var string */
	public $dialogId;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->dialogId !== null) {
			$data->dialogId = $this->dialogId;
		}
		return $data;
	}
}
