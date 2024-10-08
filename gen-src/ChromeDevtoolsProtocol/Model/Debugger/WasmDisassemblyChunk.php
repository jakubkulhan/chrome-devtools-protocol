<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Named type Debugger.WasmDisassemblyChunk.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WasmDisassemblyChunk implements \JsonSerializable
{
	/**
	 * The next chunk of disassembled lines.
	 *
	 * @var string[]
	 */
	public $lines;

	/**
	 * The bytecode offsets describing the start of each line.
	 *
	 * @var int[]
	 */
	public $bytecodeOffsets;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->lines)) {
			$instance->lines = [];
			foreach ($data->lines as $item) {
				$instance->lines[] = (string)$item;
			}
		}
		if (isset($data->bytecodeOffsets)) {
			$instance->bytecodeOffsets = [];
			foreach ($data->bytecodeOffsets as $item) {
				$instance->bytecodeOffsets[] = (int)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->lines !== null) {
			$data->lines = [];
			foreach ($this->lines as $item) {
				$data->lines[] = $item;
			}
		}
		if ($this->bytecodeOffsets !== null) {
			$data->bytecodeOffsets = [];
			foreach ($this->bytecodeOffsets as $item) {
				$data->bytecodeOffsets[] = $item;
			}
		}
		return $data;
	}
}
