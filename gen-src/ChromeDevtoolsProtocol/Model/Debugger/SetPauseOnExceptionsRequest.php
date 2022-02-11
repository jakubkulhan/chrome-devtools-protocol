<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.setPauseOnExceptions command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPauseOnExceptionsRequest implements \JsonSerializable
{
	/**
	 * Pause on exceptions mode.
	 *
	 * @var string
	 */
	public $state;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->state)) {
			$instance->state = (string)$data->state;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->state !== null) {
			$data->state = $this->state;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetPauseOnExceptionsRequestBuilder
	 */
	public static function builder(): SetPauseOnExceptionsRequestBuilder
	{
		return new SetPauseOnExceptionsRequestBuilder();
	}
}
