<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.setAttributeValue command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAttributeValueRequest implements \JsonSerializable
{
	/**
	 * Id of the element to set attribute for.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Attribute name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Attribute value.
	 *
	 * @var string
	 */
	public $value;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->value)) {
			$instance->value = (string)$data->value;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetAttributeValueRequestBuilder
	 */
	public static function builder(): SetAttributeValueRequestBuilder
	{
		return new SetAttributeValueRequestBuilder();
	}
}
