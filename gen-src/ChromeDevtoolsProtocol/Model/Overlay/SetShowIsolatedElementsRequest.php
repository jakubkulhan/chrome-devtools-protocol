<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.setShowIsolatedElements command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowIsolatedElementsRequest implements \JsonSerializable
{
	/**
	 * An array of node identifiers and descriptors for the highlight appearance.
	 *
	 * @var IsolatedElementHighlightConfig[]
	 */
	public $isolatedElementHighlightConfigs;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->isolatedElementHighlightConfigs)) {
			$instance->isolatedElementHighlightConfigs = [];
			foreach ($data->isolatedElementHighlightConfigs as $item) {
				$instance->isolatedElementHighlightConfigs[] = IsolatedElementHighlightConfig::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->isolatedElementHighlightConfigs !== null) {
			$data->isolatedElementHighlightConfigs = [];
			foreach ($this->isolatedElementHighlightConfigs as $item) {
				$data->isolatedElementHighlightConfigs[] = $item->jsonSerialize();
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetShowIsolatedElementsRequestBuilder
	 */
	public static function builder(): SetShowIsolatedElementsRequestBuilder
	{
		return new SetShowIsolatedElementsRequestBuilder();
	}
}
