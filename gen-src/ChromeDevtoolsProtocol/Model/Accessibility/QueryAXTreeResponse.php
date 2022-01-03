<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * Response to Accessibility.queryAXTree command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class QueryAXTreeResponse implements \JsonSerializable
{
	/**
	 * A list of `Accessibility.AXNode` matching the specified attributes, including nodes that are ignored for accessibility.
	 *
	 * @var AXNode[]
	 */
	public $nodes;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodes)) {
			$instance->nodes = [];
			foreach ($data->nodes as $item) {
				$instance->nodes[] = AXNode::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->nodes !== null) {
			$data->nodes = [];
			foreach ($this->nodes as $item) {
				$data->nodes[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
