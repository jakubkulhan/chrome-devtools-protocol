<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.executeWasmEvaluator command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ExecuteWasmEvaluatorRequest implements \JsonSerializable
{
	/**
	 * WebAssembly call frame identifier to evaluate on.
	 *
	 * @var string
	 */
	public $callFrameId;

	/**
	 * Code of the evaluator module. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string
	 */
	public $evaluator;

	/**
	 * Terminate execution after timing out (number of milliseconds).
	 *
	 * @var int|float
	 */
	public $timeout;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->callFrameId)) {
			$instance->callFrameId = (string)$data->callFrameId;
		}
		if (isset($data->evaluator)) {
			$instance->evaluator = (string)$data->evaluator;
		}
		if (isset($data->timeout)) {
			$instance->timeout = $data->timeout;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->callFrameId !== null) {
			$data->callFrameId = $this->callFrameId;
		}
		if ($this->evaluator !== null) {
			$data->evaluator = $this->evaluator;
		}
		if ($this->timeout !== null) {
			$data->timeout = $this->timeout;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ExecuteWasmEvaluatorRequestBuilder
	 */
	public static function builder(): ExecuteWasmEvaluatorRequestBuilder
	{
		return new ExecuteWasmEvaluatorRequestBuilder();
	}
}
