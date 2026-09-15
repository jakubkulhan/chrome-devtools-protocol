<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.setTextMarker command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetTextMarkerRequest implements \JsonSerializable
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
	 * The type of marker to set on the given range of text.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Start offset into the element's rendered text in UTF-16 code units. For a text control, an offset into the control's value. Offsets count text in DOM order and do not enter shadow trees. To mark text inside a shadow tree, pass the element inside the shadow tree.
	 *
	 * @var int
	 */
	public $start;

	/**
	 * End offset (exclusive) in the same units and space as start.
	 *
	 * @var int
	 */
	public $end;


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
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->start)) {
			$instance->start = (int)$data->start;
		}
		if (isset($data->end)) {
			$instance->end = (int)$data->end;
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
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->start !== null) {
			$data->start = $this->start;
		}
		if ($this->end !== null) {
			$data->end = $this->end;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetTextMarkerRequestBuilder
	 */
	public static function builder(): SetTextMarkerRequestBuilder
	{
		return new SetTextMarkerRequestBuilder();
	}
}
