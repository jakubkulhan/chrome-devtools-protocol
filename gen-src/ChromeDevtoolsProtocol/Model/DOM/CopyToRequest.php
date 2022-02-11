<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Request for DOM.copyTo command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CopyToRequest implements \JsonSerializable
{
	/**
	 * Id of the node to copy.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Id of the element to drop the copy into.
	 *
	 * @var int
	 */
	public $targetNodeId;

	/**
	 * Drop the copy before this node (if absent, the copy becomes the last child of `targetNodeId`).
	 *
	 * @var int
	 */
	public $insertBeforeNodeId;


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
		if (isset($data->targetNodeId)) {
			$instance->targetNodeId = (int)$data->targetNodeId;
		}
		if (isset($data->insertBeforeNodeId)) {
			$instance->insertBeforeNodeId = (int)$data->insertBeforeNodeId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->targetNodeId !== null) {
			$data->targetNodeId = $this->targetNodeId;
		}
		if ($this->insertBeforeNodeId !== null) {
			$data->insertBeforeNodeId = $this->insertBeforeNodeId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return CopyToRequestBuilder
	 */
	public static function builder(): CopyToRequestBuilder
	{
		return new CopyToRequestBuilder();
	}
}
