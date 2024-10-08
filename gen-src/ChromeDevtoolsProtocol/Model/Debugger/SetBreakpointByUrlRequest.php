<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.setBreakpointByUrl command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBreakpointByUrlRequest implements \JsonSerializable
{
	/**
	 * Line number to set breakpoint at.
	 *
	 * @var int
	 */
	public $lineNumber;

	/**
	 * URL of the resources to set breakpoint on.
	 *
	 * @var string|null
	 */
	public $url;

	/**
	 * Regex pattern for the URLs of the resources to set breakpoints on. Either `url` or `urlRegex` must be specified.
	 *
	 * @var string|null
	 */
	public $urlRegex;

	/**
	 * Script hash of the resources to set breakpoint on.
	 *
	 * @var string|null
	 */
	public $scriptHash;

	/**
	 * Offset in the line to set breakpoint at.
	 *
	 * @var int|null
	 */
	public $columnNumber;

	/**
	 * Expression to use as a breakpoint condition. When specified, debugger will only stop on the breakpoint if this expression evaluates to true.
	 *
	 * @var string|null
	 */
	public $condition;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->lineNumber)) {
			$instance->lineNumber = (int)$data->lineNumber;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->urlRegex)) {
			$instance->urlRegex = (string)$data->urlRegex;
		}
		if (isset($data->scriptHash)) {
			$instance->scriptHash = (string)$data->scriptHash;
		}
		if (isset($data->columnNumber)) {
			$instance->columnNumber = (int)$data->columnNumber;
		}
		if (isset($data->condition)) {
			$instance->condition = (string)$data->condition;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->lineNumber !== null) {
			$data->lineNumber = $this->lineNumber;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->urlRegex !== null) {
			$data->urlRegex = $this->urlRegex;
		}
		if ($this->scriptHash !== null) {
			$data->scriptHash = $this->scriptHash;
		}
		if ($this->columnNumber !== null) {
			$data->columnNumber = $this->columnNumber;
		}
		if ($this->condition !== null) {
			$data->condition = $this->condition;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetBreakpointByUrlRequestBuilder
	 */
	public static function builder(): SetBreakpointByUrlRequestBuilder
	{
		return new SetBreakpointByUrlRequestBuilder();
	}
}
