<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Named type Overlay.ScrollSnapHighlightConfig.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScrollSnapHighlightConfig implements \JsonSerializable
{
	/**
	 * A descriptor for the highlight appearance of scroll snap containers.
	 *
	 * @var ScrollSnapContainerHighlightConfig
	 */
	public $scrollSnapContainerHighlightConfig;

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
		if (isset($data->scrollSnapContainerHighlightConfig)) {
			$instance->scrollSnapContainerHighlightConfig = ScrollSnapContainerHighlightConfig::fromJson($data->scrollSnapContainerHighlightConfig);
		}
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scrollSnapContainerHighlightConfig !== null) {
			$data->scrollSnapContainerHighlightConfig = $this->scrollSnapContainerHighlightConfig->jsonSerialize();
		}
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		return $data;
	}
}
