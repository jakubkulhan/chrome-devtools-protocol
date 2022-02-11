<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Response to Debugger.setBreakpointByUrl command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBreakpointByUrlResponse implements \JsonSerializable
{
	/**
	 * Id of the created breakpoint for further reference.
	 *
	 * @var string
	 */
	public $breakpointId;

	/**
	 * List of the locations this breakpoint resolved into upon addition.
	 *
	 * @var Location[]
	 */
	public $locations;


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
		if (isset($data->locations)) {
			$instance->locations = [];
			foreach ($data->locations as $item) {
				$instance->locations[] = Location::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->breakpointId !== null) {
			$data->breakpointId = $this->breakpointId;
		}
		if ($this->locations !== null) {
			$data->locations = [];
			foreach ($this->locations as $item) {
				$data->locations[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
