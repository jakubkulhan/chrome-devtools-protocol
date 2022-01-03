<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.setShowFlexOverlays command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowFlexOverlaysRequest implements \JsonSerializable
{
	/**
	 * An array of node identifiers and descriptors for the highlight appearance.
	 *
	 * @var FlexNodeHighlightConfig[]
	 */
	public $flexNodeHighlightConfigs;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->flexNodeHighlightConfigs)) {
			$instance->flexNodeHighlightConfigs = [];
			foreach ($data->flexNodeHighlightConfigs as $item) {
				$instance->flexNodeHighlightConfigs[] = FlexNodeHighlightConfig::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->flexNodeHighlightConfigs !== null) {
			$data->flexNodeHighlightConfigs = [];
			foreach ($this->flexNodeHighlightConfigs as $item) {
				$data->flexNodeHighlightConfigs[] = $item->jsonSerialize();
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetShowFlexOverlaysRequestBuilder
	 */
	public static function builder(): SetShowFlexOverlaysRequestBuilder
	{
		return new SetShowFlexOverlaysRequestBuilder();
	}
}
