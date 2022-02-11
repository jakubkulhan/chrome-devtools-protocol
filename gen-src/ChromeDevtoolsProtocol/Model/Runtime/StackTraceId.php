<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * If `debuggerId` is set stack trace comes from another debugger and can be resolved there. This allows to track cross-debugger calls. See `Runtime.StackTrace` and `Debugger.paused` for usages.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StackTraceId implements \JsonSerializable
{
	/** @var string */
	public $id;

	/** @var string */
	public $debuggerId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		if (isset($data->debuggerId)) {
			$instance->debuggerId = (string)$data->debuggerId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->debuggerId !== null) {
			$data->debuggerId = $this->debuggerId;
		}
		return $data;
	}
}
