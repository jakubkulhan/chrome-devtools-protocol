<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.getLonghandProperties command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetLonghandPropertiesRequest implements \JsonSerializable
{
	/** @var string */
	public $shorthandName;

	/** @var string */
	public $value;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->shorthandName)) {
			$instance->shorthandName = (string)$data->shorthandName;
		}
		if (isset($data->value)) {
			$instance->value = (string)$data->value;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->shorthandName !== null) {
			$data->shorthandName = $this->shorthandName;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetLonghandPropertiesRequestBuilder
	 */
	public static function builder(): GetLonghandPropertiesRequestBuilder
	{
		return new GetLonghandPropertiesRequestBuilder();
	}
}
