<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.highlightNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HighlightNodeRequest implements \JsonSerializable
{
	/**
	 * A descriptor for the highlight appearance.
	 *
	 * @var HighlightConfig
	 */
	public $highlightConfig;

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
	 * Selectors to highlight relevant nodes.
	 *
	 * @var string|null
	 */
	public $selector;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->highlightConfig)) {
			$instance->highlightConfig = HighlightConfig::fromJson($data->highlightConfig);
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
		if (isset($data->selector)) {
			$instance->selector = (string)$data->selector;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->highlightConfig !== null) {
			$data->highlightConfig = $this->highlightConfig->jsonSerialize();
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
		if ($this->selector !== null) {
			$data->selector = $this->selector;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return HighlightNodeRequestBuilder
	 */
	public static function builder(): HighlightNodeRequestBuilder
	{
		return new HighlightNodeRequestBuilder();
	}
}
