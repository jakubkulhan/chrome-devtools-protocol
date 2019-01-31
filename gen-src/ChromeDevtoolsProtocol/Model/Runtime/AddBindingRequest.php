<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Request for Runtime.addBinding command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddBindingRequest implements \JsonSerializable
{
	/** @var string */
	public $name;

	/** @var int */
	public $executionContextId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
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
		if ($this->executionContextId !== null) {
			$data->executionContextId = $this->executionContextId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return AddBindingRequestBuilder
	 */
	public static function builder(): AddBindingRequestBuilder
	{
		return new AddBindingRequestBuilder();
	}
}
