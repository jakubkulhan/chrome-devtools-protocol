<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Model\DOM\RGBA;

/**
 * Request for Emulation.setDefaultBackgroundColorOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDefaultBackgroundColorOverrideRequest implements \JsonSerializable
{
	/**
	 * RGBA of the default background color. If not specified, any existing override will be cleared.
	 *
	 * @var RGBA|null
	 */
	public $color;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->color)) {
			$instance->color = RGBA::fromJson($data->color);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->color !== null) {
			$data->color = $this->color->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetDefaultBackgroundColorOverrideRequestBuilder
	 */
	public static function builder(): SetDefaultBackgroundColorOverrideRequestBuilder
	{
		return new SetDefaultBackgroundColorOverrideRequestBuilder();
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
