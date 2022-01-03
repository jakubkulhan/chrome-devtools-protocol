<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.setShowLayoutShiftRegions command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowLayoutShiftRegionsRequest implements \JsonSerializable
{
	/**
	 * True for showing layout shift regions
	 *
	 * @var bool
	 */
	public $result;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->result)) {
			$instance->result = (bool)$data->result;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->result !== null) {
			$data->result = $this->result;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetShowLayoutShiftRegionsRequestBuilder
	 */
	public static function builder(): SetShowLayoutShiftRegionsRequestBuilder
	{
		return new SetShowLayoutShiftRegionsRequestBuilder();
	}
}
