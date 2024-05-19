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

	/**
	 * If specified, the binding would only be exposed to the specified execution context. If omitted and `executionContextName` is not set, the binding is exposed to all execution contexts of the target. This parameter is mutually exclusive with `executionContextName`. Deprecated in favor of `executionContextName` due to an unclear use case and bugs in implementation (crbug.com/1169639). `executionContextId` will be removed in the future.
	 *
	 * @var int
	 */
	public $executionContextId;

	/**
	 * If specified, the binding is exposed to the executionContext with matching name, even for contexts created after the binding is added. See also `ExecutionContext.name` and `worldName` parameter to `Page.addScriptToEvaluateOnNewDocument`. This parameter is mutually exclusive with `executionContextId`.
	 *
	 * @var string|null
	 */
	public $executionContextName;


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
		if (isset($data->executionContextId)) {
			$instance->executionContextId = (int)$data->executionContextId;
		}
		if (isset($data->executionContextName)) {
			$instance->executionContextName = (string)$data->executionContextName;
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
		if ($this->executionContextName !== null) {
			$data->executionContextName = $this->executionContextName;
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
