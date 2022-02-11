<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.trackComputedStyleUpdates command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TrackComputedStyleUpdatesRequest implements \JsonSerializable
{
	/** @var CSSComputedStyleProperty[] */
	public $propertiesToTrack;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->propertiesToTrack)) {
			$instance->propertiesToTrack = [];
			foreach ($data->propertiesToTrack as $item) {
				$instance->propertiesToTrack[] = CSSComputedStyleProperty::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->propertiesToTrack !== null) {
			$data->propertiesToTrack = [];
			foreach ($this->propertiesToTrack as $item) {
				$data->propertiesToTrack[] = $item->jsonSerialize();
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return TrackComputedStyleUpdatesRequestBuilder
	 */
	public static function builder(): TrackComputedStyleUpdatesRequestBuilder
	{
		return new TrackComputedStyleUpdatesRequestBuilder();
	}
}
