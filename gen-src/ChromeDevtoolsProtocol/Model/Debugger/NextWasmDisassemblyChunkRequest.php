<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.nextWasmDisassemblyChunk command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class NextWasmDisassemblyChunkRequest implements \JsonSerializable
{
	/** @var string */
	public $streamId;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->streamId !== null) {
			$data->streamId = $this->streamId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return NextWasmDisassemblyChunkRequestBuilder
	 */
	public static function builder(): NextWasmDisassemblyChunkRequestBuilder
	{
		return new NextWasmDisassemblyChunkRequestBuilder();
	}
}
