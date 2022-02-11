<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Request for Target.exposeDevToolsProtocol command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ExposeDevToolsProtocolRequest implements \JsonSerializable
{
	/** @var string */
	public $targetId;

	/**
	 * Binding name, 'cdp' if not specified.
	 *
	 * @var string|null
	 */
	public $bindingName;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->targetId)) {
			$instance->targetId = (string)$data->targetId;
		}
		if (isset($data->bindingName)) {
			$instance->bindingName = (string)$data->bindingName;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->targetId !== null) {
			$data->targetId = $this->targetId;
		}
		if ($this->bindingName !== null) {
			$data->bindingName = $this->bindingName;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ExposeDevToolsProtocolRequestBuilder
	 */
	public static function builder(): ExposeDevToolsProtocolRequestBuilder
	{
		return new ExposeDevToolsProtocolRequestBuilder();
	}
}
