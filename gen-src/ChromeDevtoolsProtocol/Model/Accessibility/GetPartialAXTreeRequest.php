<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * Request for Accessibility.getPartialAXTree command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetPartialAXTreeRequest implements \JsonSerializable
{
	/**
	 * Identifier of the node to get the partial accessibility tree for.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Identifier of the backend node to get the partial accessibility tree for.
	 *
	 * @var int
	 */
	public $backendNodeId;

	/**
	 * JavaScript object id of the node wrapper to get the partial accessibility tree for.
	 *
	 * @var string
	 */
	public $objectId;

	/**
	 * Whether to fetch this nodes ancestors, siblings and children. Defaults to true.
	 *
	 * @var bool|null
	 */
	public $fetchRelatives;


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
		if (isset($data->fetchRelatives)) {
			$instance->fetchRelatives = (bool)$data->fetchRelatives;
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
		if ($this->fetchRelatives !== null) {
			$data->fetchRelatives = $this->fetchRelatives;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetPartialAXTreeRequestBuilder
	 */
	public static function builder(): GetPartialAXTreeRequestBuilder
	{
		return new GetPartialAXTreeRequestBuilder();
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
