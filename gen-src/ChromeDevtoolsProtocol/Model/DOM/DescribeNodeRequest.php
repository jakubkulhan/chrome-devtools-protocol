<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.describeNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DescribeNodeRequest implements \JsonSerializable
{
	/**
	 * Identifier of the node.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Identifier of the backend node.
	 *
	 * @var int
	 */
	public $backendNodeId;

	/**
	 * JavaScript object id of the node wrapper.
	 *
	 * @var string
	 */
	public $objectId;

	/**
	 * The maximum depth at which children should be retrieved, defaults to 1. Use -1 for the entire subtree or provide an integer larger than 0.
	 *
	 * @var int|null
	 */
	public $depth;

	/**
	 * Whether or not iframes and shadow roots should be traversed when returning the subtree (default is false).
	 *
	 * @var bool|null
	 */
	public $pierce;


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
		if (isset($data->depth)) {
			$instance->depth = (int)$data->depth;
		}
		if (isset($data->pierce)) {
			$instance->pierce = (bool)$data->pierce;
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
		if ($this->depth !== null) {
			$data->depth = $this->depth;
		}
		if ($this->pierce !== null) {
			$data->pierce = $this->pierce;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DescribeNodeRequestBuilder
	 */
	public static function builder(): DescribeNodeRequestBuilder
	{
		return new DescribeNodeRequestBuilder();
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
