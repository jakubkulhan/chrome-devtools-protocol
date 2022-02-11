<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.setNodeValue command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetNodeValueRequest implements \JsonSerializable
{
	/**
	 * Id of the node to set value for.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * New node's value.
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
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetNodeValueRequestBuilder
	 */
	public static function builder(): SetNodeValueRequestBuilder
	{
		return new SetNodeValueRequestBuilder();
	}
}
