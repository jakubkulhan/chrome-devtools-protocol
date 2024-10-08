<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Request for Runtime.queryObjects command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class QueryObjectsRequest implements \JsonSerializable
{
	/**
	 * Identifier of the prototype to return objects for.
	 *
	 * @var string
	 */
	public $prototypeObjectId;

	/**
	 * Symbolic group name that can be used to release the results.
	 *
	 * @var string|null
	 */
	public $objectGroup;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->prototypeObjectId)) {
			$instance->prototypeObjectId = (string)$data->prototypeObjectId;
		}
		if (isset($data->objectGroup)) {
			$instance->objectGroup = (string)$data->objectGroup;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->prototypeObjectId !== null) {
			$data->prototypeObjectId = $this->prototypeObjectId;
		}
		if ($this->objectGroup !== null) {
			$data->objectGroup = $this->objectGroup;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return QueryObjectsRequestBuilder
	 */
	public static function builder(): QueryObjectsRequestBuilder
	{
		return new QueryObjectsRequestBuilder();
	}
}
