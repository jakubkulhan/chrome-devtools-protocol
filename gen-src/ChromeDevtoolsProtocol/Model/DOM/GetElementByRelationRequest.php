<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.getElementByRelation command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetElementByRelationRequest implements \JsonSerializable
{
	/**
	 * Id of the node from which to query the relation.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Type of relation to get.
	 *
	 * @var string
	 */
	public $relation;


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
		if (isset($data->relation)) {
			$instance->relation = (string)$data->relation;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->relation !== null) {
			$data->relation = $this->relation;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetElementByRelationRequestBuilder
	 */
	public static function builder(): GetElementByRelationRequestBuilder
	{
		return new GetElementByRelationRequestBuilder();
	}
}
