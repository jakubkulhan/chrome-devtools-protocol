<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Model\DOM\Rect;

/**
 * Request for Emulation.setVirtualKeyboardGeometryOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetVirtualKeyboardGeometryOverrideRequest implements \JsonSerializable
{
	/** @var Rect|null */
	public $keyboardRect;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->keyboardRect)) {
			$instance->keyboardRect = Rect::fromJson($data->keyboardRect);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->keyboardRect !== null) {
			$data->keyboardRect = $this->keyboardRect->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetVirtualKeyboardGeometryOverrideRequestBuilder
	 */
	public static function builder(): SetVirtualKeyboardGeometryOverrideRequestBuilder
	{
		return new SetVirtualKeyboardGeometryOverrideRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
