<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.setShowInspectedElementAnchor command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowInspectedElementAnchorRequest implements \JsonSerializable
{
	/**
	 * Node identifier for which to show an anchor for.
	 *
	 * @var InspectedElementAnchorConfig
	 */
	public $inspectedElementAnchorConfig;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->inspectedElementAnchorConfig)) {
			$instance->inspectedElementAnchorConfig = InspectedElementAnchorConfig::fromJson($data->inspectedElementAnchorConfig);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->inspectedElementAnchorConfig !== null) {
			$data->inspectedElementAnchorConfig = $this->inspectedElementAnchorConfig->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetShowInspectedElementAnchorRequestBuilder
	 */
	public static function builder(): SetShowInspectedElementAnchorRequestBuilder
	{
		return new SetShowInspectedElementAnchorRequestBuilder();
	}
}
