<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.setSkipAllPauses command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSkipAllPausesRequest implements \JsonSerializable
{
	/**
	 * New value for skip pauses state.
	 *
	 * @var bool
	 */
	public $skip;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->skip)) {
			$instance->skip = (bool)$data->skip;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->skip !== null) {
			$data->skip = $this->skip;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetSkipAllPausesRequestBuilder
	 */
	public static function builder(): SetSkipAllPausesRequestBuilder
	{
		return new SetSkipAllPausesRequestBuilder();
	}
}
