<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Fired when `Container`'s child node count has changed.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ChildNodeCountUpdatedEvent implements \JsonSerializable
{
	/**
	 * Id of the node that has changed.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * New node count.
	 *
	 * @var int
	 */
	public $childNodeCount;


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
		if (isset($data->childNodeCount)) {
			$instance->childNodeCount = (int)$data->childNodeCount;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->childNodeCount !== null) {
			$data->childNodeCount = $this->childNodeCount;
		}
		return $data;
	}
}
