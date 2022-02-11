<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Named type Debugger.BreakLocation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BreakLocation implements \JsonSerializable
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

	/** @var string|null */
	public $type;


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
		if (isset($data->lineNumber)) {
			$instance->lineNumber = (int)$data->lineNumber;
		}
		if (isset($data->columnNumber)) {
			$instance->columnNumber = (int)$data->columnNumber;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		return $instance;
	}


	public function jsonSerialize()
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
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		return $data;
	}
}
