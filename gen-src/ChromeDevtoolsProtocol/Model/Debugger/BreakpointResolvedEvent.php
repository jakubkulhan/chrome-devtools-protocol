<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Fired when breakpoint is resolved to an actual script and location.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BreakpointResolvedEvent implements \JsonSerializable
{
	/**
	 * Breakpoint unique identifier.
	 *
	 * @var string
	 */
	public $breakpointId;

	/**
	 * Actual breakpoint location.
	 *
	 * @var Location
	 */
	public $location;


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
		if (isset($data->location)) {
			$instance->location = Location::fromJson($data->location);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->breakpointId !== null) {
			$data->breakpointId = $this->breakpointId;
		}
		if ($this->location !== null) {
			$data->location = $this->location->jsonSerialize();
		}
		return $data;
	}
}
