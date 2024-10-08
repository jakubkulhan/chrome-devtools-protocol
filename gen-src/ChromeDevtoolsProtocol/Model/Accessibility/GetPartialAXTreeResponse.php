<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * Response to Accessibility.getPartialAXTree command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetPartialAXTreeResponse implements \JsonSerializable
{
	/**
	 * The `Accessibility.AXNode` for this DOM node, if it exists, plus its ancestors, siblings and children, if requested.
	 *
	 * @var AXNode[]
	 */
	public $nodes;


	/**
	 * @param object $data
	 * @return static
	 */
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


	public function jsonSerialize()
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
