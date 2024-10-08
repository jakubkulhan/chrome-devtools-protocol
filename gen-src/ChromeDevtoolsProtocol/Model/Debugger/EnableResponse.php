<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Response to Debugger.enable command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableResponse implements \JsonSerializable
{
	/**
	 * Unique identifier of the debugger.
	 *
	 * @var string
	 */
	public $debuggerId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->debuggerId)) {
			$instance->debuggerId = (string)$data->debuggerId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->debuggerId !== null) {
			$data->debuggerId = $this->debuggerId;
		}
		return $data;
	}
}
