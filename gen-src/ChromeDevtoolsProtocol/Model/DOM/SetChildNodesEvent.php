<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Fired when backend wants to provide client with the missing DOM structure. This happens upon most of the calls requesting node ids.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetChildNodesEvent implements \JsonSerializable
{
	/**
	 * Parent node id to populate with children.
	 *
	 * @var int
	 */
	public $parentId;

	/**
	 * Child nodes array.
	 *
	 * @var Node[]
	 */
	public $nodes;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->parentId)) {
			$instance->parentId = (int)$data->parentId;
		}
		if (isset($data->nodes)) {
			$instance->nodes = [];
			foreach ($data->nodes as $item) {
				$instance->nodes[] = Node::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->parentId !== null) {
			$data->parentId = $this->parentId;
		}
		if ($this->nodes !== null) {
			$data->nodes = [];
			foreach ($this->nodes as $item) {
				$data->nodes[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
