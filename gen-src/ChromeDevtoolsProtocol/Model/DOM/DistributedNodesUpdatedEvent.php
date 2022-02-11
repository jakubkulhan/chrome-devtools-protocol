<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Called when distribution is changed.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DistributedNodesUpdatedEvent implements \JsonSerializable
{
	/**
	 * Insertion point where distributed nodes were updated.
	 *
	 * @var int
	 */
	public $insertionPointId;

	/**
	 * Distributed nodes for given insertion point.
	 *
	 * @var BackendNode[]
	 */
	public $distributedNodes;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->insertionPointId)) {
			$instance->insertionPointId = (int)$data->insertionPointId;
		}
		if (isset($data->distributedNodes)) {
			$instance->distributedNodes = [];
			foreach ($data->distributedNodes as $item) {
				$instance->distributedNodes[] = BackendNode::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->insertionPointId !== null) {
			$data->insertionPointId = $this->insertionPointId;
		}
		if ($this->distributedNodes !== null) {
			$data->distributedNodes = [];
			foreach ($this->distributedNodes as $item) {
				$data->distributedNodes[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
