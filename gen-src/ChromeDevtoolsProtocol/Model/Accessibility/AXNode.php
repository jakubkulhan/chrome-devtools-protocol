<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * A node in the accessibility tree.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AXNode implements \JsonSerializable
{
	/**
	 * Unique identifier for this node.
	 *
	 * @var string
	 */
	public $nodeId;

	/**
	 * Whether this node is ignored for accessibility
	 *
	 * @var bool
	 */
	public $ignored;

	/**
	 * Collection of reasons why this node is hidden.
	 *
	 * @var AXProperty[]|null
	 */
	public $ignoredReasons;

	/**
	 * This `Node`'s role, whether explicit or implicit.
	 *
	 * @var AXValue|null
	 */
	public $role;

	/**
	 * The accessible name for this `Node`.
	 *
	 * @var AXValue|null
	 */
	public $name;

	/**
	 * The accessible description for this `Node`.
	 *
	 * @var AXValue|null
	 */
	public $description;

	/**
	 * The value for this `Node`.
	 *
	 * @var AXValue|null
	 */
	public $value;

	/**
	 * All other properties
	 *
	 * @var AXProperty[]|null
	 */
	public $properties;

	/**
	 * ID for this node's parent.
	 *
	 * @var string
	 */
	public $parentId;

	/**
	 * IDs for each of this node's child nodes.
	 *
	 * @var string[]|null
	 */
	public $childIds;

	/**
	 * The backend ID for the associated DOM node, if any.
	 *
	 * @var int
	 */
	public $backendDOMNodeId;

	/**
	 * The frame ID for the frame associated with this nodes document.
	 *
	 * @var string
	 */
	public $frameId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (string)$data->nodeId;
		}
		if (isset($data->ignored)) {
			$instance->ignored = (bool)$data->ignored;
		}
		if (isset($data->ignoredReasons)) {
			$instance->ignoredReasons = [];
			foreach ($data->ignoredReasons as $item) {
				$instance->ignoredReasons[] = AXProperty::fromJson($item);
			}
		}
		if (isset($data->role)) {
			$instance->role = AXValue::fromJson($data->role);
		}
		if (isset($data->name)) {
			$instance->name = AXValue::fromJson($data->name);
		}
		if (isset($data->description)) {
			$instance->description = AXValue::fromJson($data->description);
		}
		if (isset($data->value)) {
			$instance->value = AXValue::fromJson($data->value);
		}
		if (isset($data->properties)) {
			$instance->properties = [];
			foreach ($data->properties as $item) {
				$instance->properties[] = AXProperty::fromJson($item);
			}
		}
		if (isset($data->parentId)) {
			$instance->parentId = (string)$data->parentId;
		}
		if (isset($data->childIds)) {
			$instance->childIds = [];
		if (isset($data->childIds)) {
			$instance->childIds = [];
			foreach ($data->childIds as $item) {
				$instance->childIds[] = (string)$item;
			}
		}
		}
		if (isset($data->backendDOMNodeId)) {
			$instance->backendDOMNodeId = (int)$data->backendDOMNodeId;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->ignored !== null) {
			$data->ignored = $this->ignored;
		}
		if ($this->ignoredReasons !== null) {
			$data->ignoredReasons = [];
			foreach ($this->ignoredReasons as $item) {
				$data->ignoredReasons[] = $item->jsonSerialize();
			}
		}
		if ($this->role !== null) {
			$data->role = $this->role->jsonSerialize();
		}
		if ($this->name !== null) {
			$data->name = $this->name->jsonSerialize();
		}
		if ($this->description !== null) {
			$data->description = $this->description->jsonSerialize();
		}
		if ($this->value !== null) {
			$data->value = $this->value->jsonSerialize();
		}
		if ($this->properties !== null) {
			$data->properties = [];
			foreach ($this->properties as $item) {
				$data->properties[] = $item->jsonSerialize();
			}
		}
		if ($this->parentId !== null) {
			$data->parentId = $this->parentId;
		}
		if ($this->childIds !== null) {
			$data->childIds = [];
		if ($this->childIds !== null) {
			$data->childIds = [];
			foreach ($this->childIds as $item) {
				$data->childIds[] = $item;
			}
		}
		}
		if ($this->backendDOMNodeId !== null) {
			$data->backendDOMNodeId = $this->backendDOMNodeId;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		return $data;
	}
}
