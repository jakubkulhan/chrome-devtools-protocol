<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.setBreakpointsActive command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBreakpointsActiveRequest implements \JsonSerializable
{
	/**
	 * New value for breakpoints active state.
	 *
	 * @var bool
	 */
	public $active;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->active)) {
			$instance->active = (bool)$data->active;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->active !== null) {
			$data->active = $this->active;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetBreakpointsActiveRequestBuilder
	 */
	public static function builder(): SetBreakpointsActiveRequestBuilder
	{
		return new SetBreakpointsActiveRequestBuilder();
	}
}
