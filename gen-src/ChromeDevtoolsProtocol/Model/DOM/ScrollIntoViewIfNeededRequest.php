<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.scrollIntoViewIfNeeded command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScrollIntoViewIfNeededRequest implements \JsonSerializable
{
	/**
	 * Identifier of the node.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Identifier of the backend node.
	 *
	 * @var int
	 */
	public $backendNodeId;

	/**
	 * JavaScript object id of the node wrapper.
	 *
	 * @var string
	 */
	public $objectId;

	/**
	 * The rect to be scrolled into view, relative to the node's border box, in CSS pixels. When omitted, center of the node will be used, similar to Element.scrollIntoView.
	 *
	 * @var Rect|null
	 */
	public $rect;


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
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = (int)$data->backendNodeId;
		}
		if (isset($data->objectId)) {
			$instance->objectId = (string)$data->objectId;
		}
		if (isset($data->rect)) {
			$instance->rect = Rect::fromJson($data->rect);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = $this->backendNodeId;
		}
		if ($this->objectId !== null) {
			$data->objectId = $this->objectId;
		}
		if ($this->rect !== null) {
			$data->rect = $this->rect->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ScrollIntoViewIfNeededRequestBuilder
	 */
	public static function builder(): ScrollIntoViewIfNeededRequestBuilder
	{
		return new ScrollIntoViewIfNeededRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
