<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Response to Debugger.disassembleWasmModule command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DisassembleWasmModuleResponse implements \JsonSerializable
{
	/**
	 * For large modules, return a stream from which additional chunks of disassembly can be read successively.
	 *
	 * @var string|null
	 */
	public $streamId;

	/**
	 * The total number of lines in the disassembly text.
	 *
	 * @var int
	 */
	public $totalNumberOfLines;

	/**
	 * The offsets of all function bodies, in the format [start1, end1, start2, end2, ...] where all ends are exclusive.
	 *
	 * @var int[]
	 */
	public $functionBodyOffsets;

	/**
	 * The first chunk of disassembly.
	 *
	 * @var WasmDisassemblyChunk
	 */
	public $chunk;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->streamId)) {
			$instance->streamId = (string)$data->streamId;
		}
		if (isset($data->totalNumberOfLines)) {
			$instance->totalNumberOfLines = (int)$data->totalNumberOfLines;
		}
		if (isset($data->functionBodyOffsets)) {
			$instance->functionBodyOffsets = [];
			foreach ($data->functionBodyOffsets as $item) {
				$instance->functionBodyOffsets[] = (int)$item;
			}
		}
		if (isset($data->chunk)) {
			$instance->chunk = WasmDisassemblyChunk::fromJson($data->chunk);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->streamId !== null) {
			$data->streamId = $this->streamId;
		}
		if ($this->totalNumberOfLines !== null) {
			$data->totalNumberOfLines = $this->totalNumberOfLines;
		}
		if ($this->functionBodyOffsets !== null) {
			$data->functionBodyOffsets = [];
			foreach ($this->functionBodyOffsets as $item) {
				$data->functionBodyOffsets[] = $item;
			}
		}
		if ($this->chunk !== null) {
			$data->chunk = $this->chunk->jsonSerialize();
		}
		return $data;
	}
}
