<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Named type Overlay.IsolatedElementHighlightConfig.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class IsolatedElementHighlightConfig implements \JsonSerializable
{
	/**
	 * A descriptor for the highlight appearance of an element in isolation mode.
	 *
	 * @var IsolationModeHighlightConfig
	 */
	public $isolationModeHighlightConfig;

	/**
	 * Identifier of the isolated element to highlight.
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
		if (isset($data->isolationModeHighlightConfig)) {
			$instance->isolationModeHighlightConfig = IsolationModeHighlightConfig::fromJson($data->isolationModeHighlightConfig);
		}
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->isolationModeHighlightConfig !== null) {
			$data->isolationModeHighlightConfig = $this->isolationModeHighlightConfig->jsonSerialize();
		}
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		return $data;
	}
}
