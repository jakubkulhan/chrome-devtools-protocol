<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.stepInto command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StepIntoRequest implements \JsonSerializable
{
	/**
	 * Debugger will pause on the execution of the first async task which was scheduled before next pause.
	 *
	 * @var bool|null
	 */
	public $breakOnAsyncCall;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->breakOnAsyncCall)) {
			$instance->breakOnAsyncCall = (bool)$data->breakOnAsyncCall;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->breakOnAsyncCall !== null) {
			$data->breakOnAsyncCall = $this->breakOnAsyncCall;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return StepIntoRequestBuilder
	 */
	public static function builder(): StepIntoRequestBuilder
	{
		return new StepIntoRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
