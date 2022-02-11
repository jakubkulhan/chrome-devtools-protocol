<?php

namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

/**
 * Response to DOMSnapshot.getSnapshot command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetSnapshotResponse implements \JsonSerializable
{
	/**
	 * The nodes in the DOM tree. The DOMNode at index 0 corresponds to the root document.
	 *
	 * @var DOMNode[]
	 */
	public $domNodes;

	/**
	 * The nodes in the layout tree.
	 *
	 * @var LayoutTreeNode[]
	 */
	public $layoutTreeNodes;

	/**
	 * Whitelisted ComputedStyle properties for each node in the layout tree.
	 *
	 * @var ComputedStyle[]
	 */
	public $computedStyles;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->domNodes)) {
			$instance->domNodes = [];
			foreach ($data->domNodes as $item) {
				$instance->domNodes[] = DOMNode::fromJson($item);
			}
		}
		if (isset($data->layoutTreeNodes)) {
			$instance->layoutTreeNodes = [];
			foreach ($data->layoutTreeNodes as $item) {
				$instance->layoutTreeNodes[] = LayoutTreeNode::fromJson($item);
			}
		}
		if (isset($data->computedStyles)) {
			$instance->computedStyles = [];
			foreach ($data->computedStyles as $item) {
				$instance->computedStyles[] = ComputedStyle::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->domNodes !== null) {
			$data->domNodes = [];
			foreach ($this->domNodes as $item) {
				$data->domNodes[] = $item->jsonSerialize();
			}
		}
		if ($this->layoutTreeNodes !== null) {
			$data->layoutTreeNodes = [];
			foreach ($this->layoutTreeNodes as $item) {
				$data->layoutTreeNodes[] = $item->jsonSerialize();
			}
		}
		if ($this->computedStyles !== null) {
			$data->computedStyles = [];
			foreach ($this->computedStyles as $item) {
				$data->computedStyles[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
