<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Mirrors `DOMNodeRemoved` event.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ChildNodeRemovedEvent implements \JsonSerializable
{
	/**
	 * Parent id.
	 *
	 * @var int
	 */
	public $parentNodeId;

	/**
	 * Id of the node that has been removed.
	 *
	 * @var int
	 */
	public $nodeId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->parentNodeId)) {
			$instance->parentNodeId = (int)$data->parentNodeId;
		}
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->parentNodeId !== null) {
			$data->parentNodeId = $this->parentNodeId;
		}
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		return $data;
	}
}
