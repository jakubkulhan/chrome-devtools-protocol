<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Request for Runtime.runScript command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RunScriptRequest implements \JsonSerializable
{
	/**
	 * Id of the script to run.
	 *
	 * @var string
	 */
	public $scriptId;

	/**
	 * Specifies in which execution context to perform script run. If the parameter is omitted the evaluation will be performed in the context of the inspected page.
	 *
	 * @var int
	 */
	public $executionContextId;

	/**
	 * Symbolic group name that can be used to release multiple objects.
	 *
	 * @var string|null
	 */
	public $objectGroup;

	/**
	 * In silent mode exceptions thrown during evaluation are not reported and do not pause execution. Overrides `setPauseOnException` state.
	 *
	 * @var bool|null
	 */
	public $silent;

	/**
	 * Determines whether Command Line API should be available during the evaluation.
	 *
	 * @var bool|null
	 */
	public $includeCommandLineAPI;

	/**
	 * Whether the result is expected to be a JSON object which should be sent by value.
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
	 * Whether execution should `await` for resulting value and return once awaited promise is resolved.
	 *
	 * @var bool|null
	 */
	public $awaitPromise;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scriptId)) {
			$instance->scriptId = (string)$data->scriptId;
		}
		if (isset($data->executionContextId)) {
			$instance->executionContextId = (int)$data->executionContextId;
		}
		if (isset($data->objectGroup)) {
			$instance->objectGroup = (string)$data->objectGroup;
		}
		if (isset($data->silent)) {
			$instance->silent = (bool)$data->silent;
		}
		if (isset($data->includeCommandLineAPI)) {
			$instance->includeCommandLineAPI = (bool)$data->includeCommandLineAPI;
		}
		if (isset($data->returnByValue)) {
			$instance->returnByValue = (bool)$data->returnByValue;
		}
		if (isset($data->generatePreview)) {
			$instance->generatePreview = (bool)$data->generatePreview;
		}
		if (isset($data->awaitPromise)) {
			$instance->awaitPromise = (bool)$data->awaitPromise;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scriptId !== null) {
			$data->scriptId = $this->scriptId;
		}
		if ($this->executionContextId !== null) {
			$data->executionContextId = $this->executionContextId;
		}
		if ($this->objectGroup !== null) {
			$data->objectGroup = $this->objectGroup;
		}
		if ($this->silent !== null) {
			$data->silent = $this->silent;
		}
		if ($this->includeCommandLineAPI !== null) {
			$data->includeCommandLineAPI = $this->includeCommandLineAPI;
		}
		if ($this->returnByValue !== null) {
			$data->returnByValue = $this->returnByValue;
		}
		if ($this->generatePreview !== null) {
			$data->generatePreview = $this->generatePreview;
		}
		if ($this->awaitPromise !== null) {
			$data->awaitPromise = $this->awaitPromise;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RunScriptRequestBuilder
	 */
	public static function builder(): RunScriptRequestBuilder
	{
		return new RunScriptRequestBuilder();
	}
}
