<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * A structure to hold the top-level node of a detached tree and an array of its retained descendants.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DetachedElementInfo implements \JsonSerializable
{
	/** @var Node */
	public $treeNode;

	/** @var int[] */
	public $retainedNodeIds;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->treeNode)) {
			$instance->treeNode = Node::fromJson($data->treeNode);
		}
		if (isset($data->retainedNodeIds)) {
			$instance->retainedNodeIds = [];
		if (isset($data->retainedNodeIds)) {
			$instance->retainedNodeIds = [];
			foreach ($data->retainedNodeIds as $item) {
				$instance->retainedNodeIds[] = (int)$item;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->treeNode !== null) {
			$data->treeNode = $this->treeNode->jsonSerialize();
		}
		if ($this->retainedNodeIds !== null) {
			$data->retainedNodeIds = [];
		if ($this->retainedNodeIds !== null) {
			$data->retainedNodeIds = [];
			foreach ($this->retainedNodeIds as $item) {
				$data->retainedNodeIds[] = $item;
			}
		}
		}
		return $data;
	}
}
