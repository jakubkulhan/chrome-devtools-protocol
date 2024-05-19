<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Issued when console API was called.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ConsoleAPICalledEvent implements \JsonSerializable
{
	/**
	 * Type of the call.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Call arguments.
	 *
	 * @var RemoteObject[]
	 */
	public $args;

	/**
	 * Identifier of the context where the call was made.
	 *
	 * @var int
	 */
	public $executionContextId;

	/**
	 * Call timestamp.
	 *
	 * @var int|float
	 */
	public $timestamp;

	/**
	 * Stack trace captured when the call was made. The async stack chain is automatically reported for the following call types: `assert`, `error`, `trace`, `warning`. For other types the async call chain can be retrieved using `Debugger.getStackTrace` and `stackTrace.parentId` field.
	 *
	 * @var StackTrace|null
	 */
	public $stackTrace;

	/**
	 * Console context descriptor for calls on non-default console context (not console.*): 'anonymous#unique-logger-id' for call on unnamed context, 'name#unique-logger-id' for call on named context.
	 *
	 * @var string|null
	 */
	public $context;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->args)) {
			$instance->args = [];
			foreach ($data->args as $item) {
				$instance->args[] = RemoteObject::fromJson($item);
			}
		}
		if (isset($data->executionContextId)) {
			$instance->executionContextId = (int)$data->executionContextId;
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		if (isset($data->stackTrace)) {
			$instance->stackTrace = StackTrace::fromJson($data->stackTrace);
		}
		if (isset($data->context)) {
			$instance->context = (string)$data->context;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->args !== null) {
			$data->args = [];
			foreach ($this->args as $item) {
				$data->args[] = $item->jsonSerialize();
			}
		}
		if ($this->executionContextId !== null) {
			$data->executionContextId = $this->executionContextId;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		if ($this->stackTrace !== null) {
			$data->stackTrace = $this->stackTrace->jsonSerialize();
		}
		if ($this->context !== null) {
			$data->context = $this->context;
		}
		return $data;
	}
}
