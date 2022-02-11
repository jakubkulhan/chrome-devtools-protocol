<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Named type Overlay.FlexNodeHighlightConfig.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FlexNodeHighlightConfig implements \JsonSerializable
{
	/**
	 * A descriptor for the highlight appearance of flex containers.
	 *
	 * @var FlexContainerHighlightConfig
	 */
	public $flexContainerHighlightConfig;

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
		if (isset($data->flexContainerHighlightConfig)) {
			$instance->flexContainerHighlightConfig = FlexContainerHighlightConfig::fromJson($data->flexContainerHighlightConfig);
		}
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->flexContainerHighlightConfig !== null) {
			$data->flexContainerHighlightConfig = $this->flexContainerHighlightConfig->jsonSerialize();
		}
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		return $data;
	}
}
