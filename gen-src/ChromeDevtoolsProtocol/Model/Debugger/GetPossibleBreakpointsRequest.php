<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.getPossibleBreakpoints command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetPossibleBreakpointsRequest implements \JsonSerializable
{
	/**
	 * Start of range to search possible breakpoint locations in.
	 *
	 * @var Location
	 */
	public $start;

	/**
	 * End of range to search possible breakpoint locations in (excluding). When not specified, end of scripts is used as end of range.
	 *
	 * @var Location|null
	 */
	public $end;

	/**
	 * Only consider locations which are in the same (non-nested) function as start.
	 *
	 * @var bool|null
	 */
	public $restrictToFunction;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->start)) {
			$instance->start = Location::fromJson($data->start);
		}
		if (isset($data->end)) {
			$instance->end = Location::fromJson($data->end);
		}
		if (isset($data->restrictToFunction)) {
			$instance->restrictToFunction = (bool)$data->restrictToFunction;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->start !== null) {
			$data->start = $this->start->jsonSerialize();
		}
		if ($this->end !== null) {
			$data->end = $this->end->jsonSerialize();
		}
		if ($this->restrictToFunction !== null) {
			$data->restrictToFunction = $this->restrictToFunction;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetPossibleBreakpointsRequestBuilder
	 */
	public static function builder(): GetPossibleBreakpointsRequestBuilder
	{
		return new GetPossibleBreakpointsRequestBuilder();
	}
}
