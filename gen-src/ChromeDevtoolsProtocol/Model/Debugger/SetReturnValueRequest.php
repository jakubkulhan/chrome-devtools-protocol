<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Model\Runtime\CallArgument;

/**
 * Request for Debugger.setReturnValue command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetReturnValueRequest implements \JsonSerializable
{
	/**
	 * New return value.
	 *
	 * @var CallArgument
	 */
	public $newValue;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->newValue)) {
			$instance->newValue = CallArgument::fromJson($data->newValue);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->newValue !== null) {
			$data->newValue = $this->newValue->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetReturnValueRequestBuilder
	 */
	public static function builder(): SetReturnValueRequestBuilder
	{
		return new SetReturnValueRequestBuilder();
	}
}
