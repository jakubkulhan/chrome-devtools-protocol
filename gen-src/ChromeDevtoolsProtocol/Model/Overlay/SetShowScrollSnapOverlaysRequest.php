<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.setShowScrollSnapOverlays command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowScrollSnapOverlaysRequest implements \JsonSerializable
{
	/**
	 * An array of node identifiers and descriptors for the highlight appearance.
	 *
	 * @var ScrollSnapHighlightConfig[]
	 */
	public $scrollSnapHighlightConfigs;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scrollSnapHighlightConfigs)) {
			$instance->scrollSnapHighlightConfigs = [];
			foreach ($data->scrollSnapHighlightConfigs as $item) {
				$instance->scrollSnapHighlightConfigs[] = ScrollSnapHighlightConfig::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scrollSnapHighlightConfigs !== null) {
			$data->scrollSnapHighlightConfigs = [];
			foreach ($this->scrollSnapHighlightConfigs as $item) {
				$data->scrollSnapHighlightConfigs[] = $item->jsonSerialize();
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetShowScrollSnapOverlaysRequestBuilder
	 */
	public static function builder(): SetShowScrollSnapOverlaysRequestBuilder
	{
		return new SetShowScrollSnapOverlaysRequestBuilder();
	}
}
