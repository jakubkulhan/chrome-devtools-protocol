<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.setShowGridOverlays command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowGridOverlaysRequest implements \JsonSerializable
{
	/**
	 * An array of node identifiers and descriptors for the highlight appearance.
	 *
	 * @var GridNodeHighlightConfig[]
	 */
	public $gridNodeHighlightConfigs;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->gridNodeHighlightConfigs)) {
			$instance->gridNodeHighlightConfigs = [];
			foreach ($data->gridNodeHighlightConfigs as $item) {
				$instance->gridNodeHighlightConfigs[] = GridNodeHighlightConfig::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->gridNodeHighlightConfigs !== null) {
			$data->gridNodeHighlightConfigs = [];
			foreach ($this->gridNodeHighlightConfigs as $item) {
				$data->gridNodeHighlightConfigs[] = $item->jsonSerialize();
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetShowGridOverlaysRequestBuilder
	 */
	public static function builder(): SetShowGridOverlaysRequestBuilder
	{
		return new SetShowGridOverlaysRequestBuilder();
	}
}
