<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setVisibleSize command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetVisibleSizeRequest implements \JsonSerializable
{
	/**
	 * Frame width (DIP).
	 *
	 * @var int
	 */
	public $width;

	/**
	 * Frame height (DIP).
	 *
	 * @var int
	 */
	public $height;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->width)) {
			$instance->width = (int)$data->width;
		}
		if (isset($data->height)) {
			$instance->height = (int)$data->height;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->width !== null) {
			$data->width = $this->width;
		}
		if ($this->height !== null) {
			$data->height = $this->height;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetVisibleSizeRequestBuilder
	 */
	public static function builder(): SetVisibleSizeRequestBuilder
	{
		return new SetVisibleSizeRequestBuilder();
	}
}
