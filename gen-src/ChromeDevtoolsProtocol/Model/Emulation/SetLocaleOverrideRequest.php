<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setLocaleOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetLocaleOverrideRequest implements \JsonSerializable
{
	/**
	 * ICU style C locale (e.g. "en_US"). If not specified or empty, disables the override and restores default host system locale.
	 *
	 * @var string|null
	 */
	public $locale;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->locale)) {
			$instance->locale = (string)$data->locale;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->locale !== null) {
			$data->locale = $this->locale;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetLocaleOverrideRequestBuilder
	 */
	public static function builder(): SetLocaleOverrideRequestBuilder
	{
		return new SetLocaleOverrideRequestBuilder();
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
