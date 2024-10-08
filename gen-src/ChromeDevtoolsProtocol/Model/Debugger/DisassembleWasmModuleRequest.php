<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.disassembleWasmModule command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DisassembleWasmModuleRequest implements \JsonSerializable
{
	/**
	 * Id of the script to disassemble
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
	 * @return DisassembleWasmModuleRequestBuilder
	 */
	public static function builder(): DisassembleWasmModuleRequestBuilder
	{
		return new DisassembleWasmModuleRequestBuilder();
	}
}
