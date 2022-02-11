<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Stack entry for runtime errors and assertions.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CallFrame implements \JsonSerializable
{
	/**
	 * JavaScript function name.
	 *
	 * @var string
	 */
	public $functionName;

	/**
	 * JavaScript script id.
	 *
	 * @var string
	 */
	public $scriptId;

	/**
	 * JavaScript script name or url.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * JavaScript script line number (0-based).
	 *
	 * @var int
	 */
	public $lineNumber;

	/**
	 * JavaScript script column number (0-based).
	 *
	 * @var int
	 */
	public $columnNumber;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->functionName)) {
			$instance->functionName = (string)$data->functionName;
		}
		if (isset($data->scriptId)) {
			$instance->scriptId = (string)$data->scriptId;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->lineNumber)) {
			$instance->lineNumber = (int)$data->lineNumber;
		}
		if (isset($data->columnNumber)) {
			$instance->columnNumber = (int)$data->columnNumber;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->functionName !== null) {
			$data->functionName = $this->functionName;
		}
		if ($this->scriptId !== null) {
			$data->scriptId = $this->scriptId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->lineNumber !== null) {
			$data->lineNumber = $this->lineNumber;
		}
		if ($this->columnNumber !== null) {
			$data->columnNumber = $this->columnNumber;
		}
		return $data;
	}
}
