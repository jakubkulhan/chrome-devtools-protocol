<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Named type Overlay.ContainerQueryHighlightConfig.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContainerQueryHighlightConfig implements \JsonSerializable
{
	/**
	 * A descriptor for the highlight appearance of container query containers.
	 *
	 * @var ContainerQueryContainerHighlightConfig
	 */
	public $containerQueryContainerHighlightConfig;

	/**
	 * Identifier of the container node to highlight.
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
		if (isset($data->containerQueryContainerHighlightConfig)) {
			$instance->containerQueryContainerHighlightConfig = ContainerQueryContainerHighlightConfig::fromJson($data->containerQueryContainerHighlightConfig);
		}
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->containerQueryContainerHighlightConfig !== null) {
			$data->containerQueryContainerHighlightConfig = $this->containerQueryContainerHighlightConfig->jsonSerialize();
		}
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		return $data;
	}
}
