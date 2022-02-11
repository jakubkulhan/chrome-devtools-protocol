<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Notification is issued every time when binding is called.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BindingCalledEvent implements \JsonSerializable
{
	/** @var string */
	public $name;

	/** @var string */
	public $payload;

	/**
	 * Identifier of the context where the call was made.
	 *
	 * @var int
	 */
	public $executionContextId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->payload)) {
			$instance->payload = (string)$data->payload;
		}
		if (isset($data->executionContextId)) {
			$instance->executionContextId = (int)$data->executionContextId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->payload !== null) {
			$data->payload = $this->payload;
		}
		if ($this->executionContextId !== null) {
			$data->executionContextId = $this->executionContextId;
		}
		return $data;
	}
}
