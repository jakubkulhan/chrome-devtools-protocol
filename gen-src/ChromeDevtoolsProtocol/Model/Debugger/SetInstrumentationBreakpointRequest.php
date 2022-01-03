<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.setInstrumentationBreakpoint command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetInstrumentationBreakpointRequest implements \JsonSerializable
{
	/**
	 * Instrumentation name.
	 *
	 * @var string
	 */
	public $instrumentation;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->instrumentation)) {
			$instance->instrumentation = (string)$data->instrumentation;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->instrumentation !== null) {
			$data->instrumentation = $this->instrumentation;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetInstrumentationBreakpointRequestBuilder
	 */
	public static function builder(): SetInstrumentationBreakpointRequestBuilder
	{
		return new SetInstrumentationBreakpointRequestBuilder();
	}
}
