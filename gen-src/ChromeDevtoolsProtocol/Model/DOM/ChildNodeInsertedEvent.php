<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Mirrors `DOMNodeInserted` event.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ChildNodeInsertedEvent implements \JsonSerializable
{
	/**
	 * Id of the node that has changed.
	 *
	 * @var int
	 */
	public $parentNodeId;

	/**
	 * If of the previous siblint.
	 *
	 * @var int
	 */
	public $previousNodeId;

	/**
	 * Inserted node data.
	 *
	 * @var Node
	 */
	public $node;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->parentNodeId)) {
			$instance->parentNodeId = (int)$data->parentNodeId;
		}
		if (isset($data->previousNodeId)) {
			$instance->previousNodeId = (int)$data->previousNodeId;
		}
		if (isset($data->node)) {
			$instance->node = Node::fromJson($data->node);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->parentNodeId !== null) {
			$data->parentNodeId = $this->parentNodeId;
		}
		if ($this->previousNodeId !== null) {
			$data->previousNodeId = $this->previousNodeId;
		}
		if ($this->node !== null) {
			$data->node = $this->node->jsonSerialize();
		}
		return $data;
	}
}
