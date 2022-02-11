<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Response to Debugger.setBreakpoint command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBreakpointResponse implements \JsonSerializable
{
	/**
	 * Id of the created breakpoint for further reference.
	 *
	 * @var string
	 */
	public $breakpointId;

	/**
	 * Location this breakpoint resolved into.
	 *
	 * @var Location
	 */
	public $actualLocation;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->breakpointId)) {
			$instance->breakpointId = (string)$data->breakpointId;
		}
		if (isset($data->actualLocation)) {
			$instance->actualLocation = Location::fromJson($data->actualLocation);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->breakpointId !== null) {
			$data->breakpointId = $this->breakpointId;
		}
		if ($this->actualLocation !== null) {
			$data->actualLocation = $this->actualLocation->jsonSerialize();
		}
		return $data;
	}
}
