<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Location in the source code.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Location implements \JsonSerializable
{
	/**
	 * Script identifier as reported in the `Debugger.scriptParsed`.
	 *
	 * @var string
	 */
	public $scriptId;

	/**
	 * Line number in the script (0-based).
	 *
	 * @var int
	 */
	public $lineNumber;

	/**
	 * Column number in the script (0-based).
	 *
	 * @var int|null
	 */
	public $columnNumber;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scriptId)) {
			$instance->scriptId = (string)$data->scriptId;
		}
		if (isset($data->lineNumber)) {
			$instance->lineNumber = (int)$data->lineNumber;
		}
		if (isset($data->columnNumber)) {
			$instance->columnNumber = (int)$data->columnNumber;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->scriptId !== null) {
			$data->scriptId = $this->scriptId;
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
