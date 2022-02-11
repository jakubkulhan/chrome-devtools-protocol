<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.removeAttribute command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveAttributeRequest implements \JsonSerializable
{
	/**
	 * Id of the element to remove attribute from.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Name of the attribute to remove.
	 *
	 * @var string
	 */
	public $name;


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
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RemoveAttributeRequestBuilder
	 */
	public static function builder(): RemoveAttributeRequestBuilder
	{
		return new RemoveAttributeRequestBuilder();
	}
}
