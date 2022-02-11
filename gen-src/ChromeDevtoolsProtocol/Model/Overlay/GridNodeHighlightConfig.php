<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Configurations for Persistent Grid Highlight
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GridNodeHighlightConfig implements \JsonSerializable
{
	/**
	 * A descriptor for the highlight appearance.
	 *
	 * @var GridHighlightConfig
	 */
	public $gridHighlightConfig;

	/**
	 * Identifier of the node to highlight.
	 *
	 * @var int
	 */
	public $nodeId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->gridHighlightConfig)) {
			$instance->gridHighlightConfig = GridHighlightConfig::fromJson($data->gridHighlightConfig);
		}
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->gridHighlightConfig !== null) {
			$data->gridHighlightConfig = $this->gridHighlightConfig->jsonSerialize();
		}
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		return $data;
	}
}
