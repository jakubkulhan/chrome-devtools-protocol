<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.resume command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ResumeRequest implements \JsonSerializable
{
	/**
	 * Set to true to terminate execution upon resuming execution. In contrast to Runtime.terminateExecution, this will allows to execute further JavaScript (i.e. via evaluation) until execution of the paused code is actually resumed, at which point termination is triggered. If execution is currently not paused, this parameter has no effect.
	 *
	 * @var bool|null
	 */
	public $terminateOnResume;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->terminateOnResume)) {
			$instance->terminateOnResume = (bool)$data->terminateOnResume;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->terminateOnResume !== null) {
			$data->terminateOnResume = $this->terminateOnResume;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ResumeRequestBuilder
	 */
	public static function builder(): ResumeRequestBuilder
	{
		return new ResumeRequestBuilder();
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
