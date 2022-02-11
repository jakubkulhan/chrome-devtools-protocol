<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.evaluateOnCallFrame command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EvaluateOnCallFrameRequest implements \JsonSerializable
{
	/**
	 * Call frame identifier to evaluate on.
	 *
	 * @var string
	 */
	public $callFrameId;

	/**
	 * Expression to evaluate.
	 *
	 * @var string
	 */
	public $expression;

	/**
	 * String object group name to put result into (allows rapid releasing resulting object handles using `releaseObjectGroup`).
	 *
	 * @var string|null
	 */
	public $objectGroup;

	/**
	 * Specifies whether command line API should be available to the evaluated expression, defaults to false.
	 *
	 * @var bool|null
	 */
	public $includeCommandLineAPI;

	/**
	 * In silent mode exceptions thrown during evaluation are not reported and do not pause execution. Overrides `setPauseOnException` state.
	 *
	 * @var bool|null
	 */
	public $silent;

	/**
	 * Whether the result is expected to be a JSON object that should be sent by value.
	 *
	 * @var bool|null
	 */
	public $returnByValue;

	/**
	 * Whether preview should be generated for the result.
	 *
	 * @var bool|null
	 */
	public $generatePreview;

	/**
	 * Whether to throw an exception if side effect cannot be ruled out during evaluation.
	 *
	 * @var bool|null
	 */
	public $throwOnSideEffect;

	/**
	 * Terminate execution after timing out (number of milliseconds).
	 *
	 * @var int|float
	 */
	public $timeout;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->callFrameId)) {
			$instance->callFrameId = (string)$data->callFrameId;
		}
		if (isset($data->expression)) {
			$instance->expression = (string)$data->expression;
		}
		if (isset($data->objectGroup)) {
			$instance->objectGroup = (string)$data->objectGroup;
		}
		if (isset($data->includeCommandLineAPI)) {
			$instance->includeCommandLineAPI = (bool)$data->includeCommandLineAPI;
		}
		if (isset($data->silent)) {
			$instance->silent = (bool)$data->silent;
		}
		if (isset($data->returnByValue)) {
			$instance->returnByValue = (bool)$data->returnByValue;
		}
		if (isset($data->generatePreview)) {
			$instance->generatePreview = (bool)$data->generatePreview;
		}
		if (isset($data->throwOnSideEffect)) {
			$instance->throwOnSideEffect = (bool)$data->throwOnSideEffect;
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
		if ($this->expression !== null) {
			$data->expression = $this->expression;
		}
		if ($this->objectGroup !== null) {
			$data->objectGroup = $this->objectGroup;
		}
		if ($this->includeCommandLineAPI !== null) {
			$data->includeCommandLineAPI = $this->includeCommandLineAPI;
		}
		if ($this->silent !== null) {
			$data->silent = $this->silent;
		}
		if ($this->returnByValue !== null) {
			$data->returnByValue = $this->returnByValue;
		}
		if ($this->generatePreview !== null) {
			$data->generatePreview = $this->generatePreview;
		}
		if ($this->throwOnSideEffect !== null) {
			$data->throwOnSideEffect = $this->throwOnSideEffect;
		}
		if ($this->timeout !== null) {
			$data->timeout = $this->timeout;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return EvaluateOnCallFrameRequestBuilder
	 */
	public static function builder(): EvaluateOnCallFrameRequestBuilder
	{
		return new EvaluateOnCallFrameRequestBuilder();
	}
}
