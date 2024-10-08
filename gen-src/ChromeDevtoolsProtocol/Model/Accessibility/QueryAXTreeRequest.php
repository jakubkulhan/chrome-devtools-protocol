<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * Request for Accessibility.queryAXTree command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class QueryAXTreeRequest implements \JsonSerializable
{
	/**
	 * Identifier of the node for the root to query.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Identifier of the backend node for the root to query.
	 *
	 * @var int
	 */
	public $backendNodeId;

	/**
	 * JavaScript object id of the node wrapper for the root to query.
	 *
	 * @var string
	 */
	public $objectId;

	/**
	 * Find nodes with this computed name.
	 *
	 * @var string|null
	 */
	public $accessibleName;

	/**
	 * Find nodes with this computed role.
	 *
	 * @var string|null
	 */
	public $role;


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
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = (int)$data->backendNodeId;
		}
		if (isset($data->objectId)) {
			$instance->objectId = (string)$data->objectId;
		}
		if (isset($data->accessibleName)) {
			$instance->accessibleName = (string)$data->accessibleName;
		}
		if (isset($data->role)) {
			$instance->role = (string)$data->role;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = $this->backendNodeId;
		}
		if ($this->objectId !== null) {
			$data->objectId = $this->objectId;
		}
		if ($this->accessibleName !== null) {
			$data->accessibleName = $this->accessibleName;
		}
		if ($this->role !== null) {
			$data->role = $this->role;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return QueryAXTreeRequestBuilder
	 */
	public static function builder(): QueryAXTreeRequestBuilder
	{
		return new QueryAXTreeRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
