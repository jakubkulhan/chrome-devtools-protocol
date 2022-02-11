<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Response to Debugger.getWasmBytecode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetWasmBytecodeResponse implements \JsonSerializable
{
	/**
	 * Script source. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string
	 */
	public $bytecode;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->bytecode)) {
			$instance->bytecode = (string)$data->bytecode;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->bytecode !== null) {
			$data->bytecode = $this->bytecode;
		}
		return $data;
	}
}
