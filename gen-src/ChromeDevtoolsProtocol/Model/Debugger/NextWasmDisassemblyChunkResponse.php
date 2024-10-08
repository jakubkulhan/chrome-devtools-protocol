<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Response to Debugger.nextWasmDisassemblyChunk command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class NextWasmDisassemblyChunkResponse implements \JsonSerializable
{
	/**
	 * The next chunk of disassembly.
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
		if (isset($data->chunk)) {
			$instance->chunk = WasmDisassemblyChunk::fromJson($data->chunk);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->chunk !== null) {
			$data->chunk = $this->chunk->jsonSerialize();
		}
		return $data;
	}
}
