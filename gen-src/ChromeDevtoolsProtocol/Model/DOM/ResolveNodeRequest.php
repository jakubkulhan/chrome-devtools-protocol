<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.resolveNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ResolveNodeRequest implements \JsonSerializable
{
	/**
	 * Id of the node to resolve.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Backend identifier of the node to resolve.
	 *
	 * @var int
	 */
	public $backendNodeId;

	/**
	 * Symbolic group name that can be used to release multiple objects.
	 *
	 * @var string|null
	 */
	public $objectGroup;

	/**
	 * Execution context in which to resolve the node.
	 *
	 * @var int
	 */
	public $executionContextId;


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
		if (isset($data->objectGroup)) {
			$instance->objectGroup = (string)$data->objectGroup;
		}
		if (isset($data->executionContextId)) {
			$instance->executionContextId = (int)$data->executionContextId;
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
		if ($this->objectGroup !== null) {
			$data->objectGroup = $this->objectGroup;
		}
		if ($this->executionContextId !== null) {
			$data->executionContextId = $this->executionContextId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ResolveNodeRequestBuilder
	 */
	public static function builder(): ResolveNodeRequestBuilder
	{
		return new ResolveNodeRequestBuilder();
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
