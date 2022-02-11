<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Request for Runtime.compileScript command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CompileScriptRequest implements \JsonSerializable
{
	/**
	 * Expression to compile.
	 *
	 * @var string
	 */
	public $expression;

	/**
	 * Source url to be set for the script.
	 *
	 * @var string
	 */
	public $sourceURL;

	/**
	 * Specifies whether the compiled script should be persisted.
	 *
	 * @var bool
	 */
	public $persistScript;

	/**
	 * Specifies in which execution context to perform script run. If the parameter is omitted the evaluation will be performed in the context of the inspected page.
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
		if (isset($data->expression)) {
			$instance->expression = (string)$data->expression;
		}
		if (isset($data->sourceURL)) {
			$instance->sourceURL = (string)$data->sourceURL;
		}
		if (isset($data->persistScript)) {
			$instance->persistScript = (bool)$data->persistScript;
		}
		if (isset($data->executionContextId)) {
			$instance->executionContextId = (int)$data->executionContextId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->expression !== null) {
			$data->expression = $this->expression;
		}
		if ($this->sourceURL !== null) {
			$data->sourceURL = $this->sourceURL;
		}
		if ($this->persistScript !== null) {
			$data->persistScript = $this->persistScript;
		}
		if ($this->executionContextId !== null) {
			$data->executionContextId = $this->executionContextId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return CompileScriptRequestBuilder
	 */
	public static function builder(): CompileScriptRequestBuilder
	{
		return new CompileScriptRequestBuilder();
	}
}
