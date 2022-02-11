<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Response to Debugger.getScriptSource command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetScriptSourceResponse implements \JsonSerializable
{
	/**
	 * Script source (empty in case of Wasm bytecode).
	 *
	 * @var string
	 */
	public $scriptSource;

	/**
	 * Wasm bytecode. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string|null
	 */
	public $bytecode;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scriptSource)) {
			$instance->scriptSource = (string)$data->scriptSource;
		}
		if (isset($data->bytecode)) {
			$instance->bytecode = (string)$data->bytecode;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scriptSource !== null) {
			$data->scriptSource = $this->scriptSource;
		}
		if ($this->bytecode !== null) {
			$data->bytecode = $this->bytecode;
		}
		return $data;
	}
}
