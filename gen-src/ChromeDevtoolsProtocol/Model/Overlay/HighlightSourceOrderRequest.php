<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.highlightSourceOrder command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HighlightSourceOrderRequest implements \JsonSerializable
{
	/**
	 * A descriptor for the appearance of the overlay drawing.
	 *
	 * @var SourceOrderConfig
	 */
	public $sourceOrderConfig;

	/**
	 * Identifier of the node to highlight.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Identifier of the backend node to highlight.
	 *
	 * @var int
	 */
	public $backendNodeId;

	/**
	 * JavaScript object id of the node to be highlighted.
	 *
	 * @var string
	 */
	public $objectId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->sourceOrderConfig)) {
			$instance->sourceOrderConfig = SourceOrderConfig::fromJson($data->sourceOrderConfig);
		}
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = (int)$data->backendNodeId;
		}
		if (isset($data->objectId)) {
			$instance->objectId = (string)$data->objectId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sourceOrderConfig !== null) {
			$data->sourceOrderConfig = $this->sourceOrderConfig->jsonSerialize();
		}
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = $this->backendNodeId;
		}
		if ($this->objectId !== null) {
			$data->objectId = $this->objectId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return HighlightSourceOrderRequestBuilder
	 */
	public static function builder(): HighlightSourceOrderRequestBuilder
	{
		return new HighlightSourceOrderRequestBuilder();
	}
}
