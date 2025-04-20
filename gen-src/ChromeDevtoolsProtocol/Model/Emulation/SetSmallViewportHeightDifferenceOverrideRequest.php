<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setSmallViewportHeightDifferenceOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSmallViewportHeightDifferenceOverrideRequest implements \JsonSerializable
{
	/**
	 * This will cause an element of size 100svh to be `difference` pixels smaller than an element of size 100lvh.
	 *
	 * @var int
	 */
	public $difference;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->difference)) {
			$instance->difference = (int)$data->difference;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->difference !== null) {
			$data->difference = $this->difference;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetSmallViewportHeightDifferenceOverrideRequestBuilder
	 */
	public static function builder(): SetSmallViewportHeightDifferenceOverrideRequestBuilder
	{
		return new SetSmallViewportHeightDifferenceOverrideRequestBuilder();
	}
}
