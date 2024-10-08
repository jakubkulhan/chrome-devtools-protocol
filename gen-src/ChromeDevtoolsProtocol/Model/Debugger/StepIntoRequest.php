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

	/**
	 * The skipList specifies location ranges that should be skipped on step into.
	 *
	 * @var LocationRange[]|null
	 */
	public $skipList;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->breakOnAsyncCall)) {
			$instance->breakOnAsyncCall = (bool)$data->breakOnAsyncCall;
		}
		if (isset($data->skipList)) {
			$instance->skipList = [];
			foreach ($data->skipList as $item) {
				$instance->skipList[] = LocationRange::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->breakOnAsyncCall !== null) {
			$data->breakOnAsyncCall = $this->breakOnAsyncCall;
		}
		if ($this->skipList !== null) {
			$data->skipList = [];
			foreach ($this->skipList as $item) {
				$data->skipList[] = $item->jsonSerialize();
			}
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
