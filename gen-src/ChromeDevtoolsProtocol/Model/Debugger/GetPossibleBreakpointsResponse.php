<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Response to Debugger.getPossibleBreakpoints command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetPossibleBreakpointsResponse implements \JsonSerializable
{
	/**
	 * List of the possible breakpoint locations.
	 *
	 * @var BreakLocation[]
	 */
	public $locations;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->locations)) {
			$instance->locations = [];
			foreach ($data->locations as $item) {
				$instance->locations[] = BreakLocation::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->locations !== null) {
			$data->locations = [];
			foreach ($this->locations as $item) {
				$data->locations[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
