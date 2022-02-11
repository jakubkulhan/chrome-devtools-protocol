<?php

namespace ChromeDevtoolsProtocol\Model\Input;

/**
 * Request for Input.setIgnoreInputEvents command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetIgnoreInputEventsRequest implements \JsonSerializable
{
	/**
	 * Ignores input events processing when set to true.
	 *
	 * @var bool
	 */
	public $ignore;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->ignore)) {
			$instance->ignore = (bool)$data->ignore;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->ignore !== null) {
			$data->ignore = $this->ignore;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetIgnoreInputEventsRequestBuilder
	 */
	public static function builder(): SetIgnoreInputEventsRequestBuilder
	{
		return new SetIgnoreInputEventsRequestBuilder();
	}
}
