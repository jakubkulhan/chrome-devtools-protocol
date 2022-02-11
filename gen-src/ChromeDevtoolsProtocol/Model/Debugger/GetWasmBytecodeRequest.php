<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.getWasmBytecode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetWasmBytecodeRequest implements \JsonSerializable
{
	/**
	 * Id of the Wasm script to get source for.
	 *
	 * @var string
	 */
	public $scriptId;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scriptId !== null) {
			$data->scriptId = $this->scriptId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetWasmBytecodeRequestBuilder
	 */
	public static function builder(): GetWasmBytecodeRequestBuilder
	{
		return new GetWasmBytecodeRequestBuilder();
	}
}
