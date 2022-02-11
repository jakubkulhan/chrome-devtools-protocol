<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Debug symbols available for a wasm script.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DebugSymbols implements \JsonSerializable
{
	/**
	 * Type of the debug symbols.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * URL of the external symbol source.
	 *
	 * @var string|null
	 */
	public $externalURL;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->externalURL)) {
			$instance->externalURL = (string)$data->externalURL;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->externalURL !== null) {
			$data->externalURL = $this->externalURL;
		}
		return $data;
	}
}
