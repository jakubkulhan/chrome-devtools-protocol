<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Detailed information about exception (or error) that was thrown during script compilation or execution.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ExceptionDetails implements \JsonSerializable
{
	/**
	 * Exception id.
	 *
	 * @var int
	 */
	public $exceptionId;

	/**
	 * Exception text, which should be used together with exception object when available.
	 *
	 * @var string
	 */
	public $text;

	/**
	 * Line number of the exception location (0-based).
	 *
	 * @var int
	 */
	public $lineNumber;

	/**
	 * Column number of the exception location (0-based).
	 *
	 * @var int
	 */
	public $columnNumber;

	/**
	 * Script ID of the exception location.
	 *
	 * @var string
	 */
	public $scriptId;

	/**
	 * URL of the exception location, to be used when the script was not reported.
	 *
	 * @var string|null
	 */
	public $url;

	/**
	 * JavaScript stack trace if available.
	 *
	 * @var StackTrace|null
	 */
	public $stackTrace;

	/**
	 * Exception object if available.
	 *
	 * @var RemoteObject|null
	 */
	public $exception;

	/**
	 * Identifier of the context where exception happened.
	 *
	 * @var int
	 */
	public $executionContextId;

	/**
	 * Dictionary with entries of meta data that the client associated with this exception, such as information about associated network requests, etc.
	 *
	 * @var object|null
	 */
	public $exceptionMetaData;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->exceptionId)) {
			$instance->exceptionId = (int)$data->exceptionId;
		}
		if (isset($data->text)) {
			$instance->text = (string)$data->text;
		}
		if (isset($data->lineNumber)) {
			$instance->lineNumber = (int)$data->lineNumber;
		}
		if (isset($data->columnNumber)) {
			$instance->columnNumber = (int)$data->columnNumber;
		}
		if (isset($data->scriptId)) {
			$instance->scriptId = (string)$data->scriptId;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->stackTrace)) {
			$instance->stackTrace = StackTrace::fromJson($data->stackTrace);
		}
		if (isset($data->exception)) {
			$instance->exception = RemoteObject::fromJson($data->exception);
		}
		if (isset($data->executionContextId)) {
			$instance->executionContextId = (int)$data->executionContextId;
		}
		if (isset($data->exceptionMetaData)) {
			$instance->exceptionMetaData = $data->exceptionMetaData;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->exceptionId !== null) {
			$data->exceptionId = $this->exceptionId;
		}
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		if ($this->lineNumber !== null) {
			$data->lineNumber = $this->lineNumber;
		}
		if ($this->columnNumber !== null) {
			$data->columnNumber = $this->columnNumber;
		}
		if ($this->scriptId !== null) {
			$data->scriptId = $this->scriptId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->stackTrace !== null) {
			$data->stackTrace = $this->stackTrace->jsonSerialize();
		}
		if ($this->exception !== null) {
			$data->exception = $this->exception->jsonSerialize();
		}
		if ($this->executionContextId !== null) {
			$data->executionContextId = $this->executionContextId;
		}
		if ($this->exceptionMetaData !== null) {
			$data->exceptionMetaData = $this->exceptionMetaData;
		}
		return $data;
	}
}
