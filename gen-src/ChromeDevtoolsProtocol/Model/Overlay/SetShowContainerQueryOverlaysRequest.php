<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.setShowContainerQueryOverlays command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowContainerQueryOverlaysRequest implements \JsonSerializable
{
	/**
	 * An array of node identifiers and descriptors for the highlight appearance.
	 *
	 * @var ContainerQueryHighlightConfig[]
	 */
	public $containerQueryHighlightConfigs;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->containerQueryHighlightConfigs)) {
			$instance->containerQueryHighlightConfigs = [];
			foreach ($data->containerQueryHighlightConfigs as $item) {
				$instance->containerQueryHighlightConfigs[] = ContainerQueryHighlightConfig::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->containerQueryHighlightConfigs !== null) {
			$data->containerQueryHighlightConfigs = [];
			foreach ($this->containerQueryHighlightConfigs as $item) {
				$data->containerQueryHighlightConfigs[] = $item->jsonSerialize();
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetShowContainerQueryOverlaysRequestBuilder
	 */
	public static function builder(): SetShowContainerQueryOverlaysRequestBuilder
	{
		return new SetShowContainerQueryOverlaysRequestBuilder();
	}
}
