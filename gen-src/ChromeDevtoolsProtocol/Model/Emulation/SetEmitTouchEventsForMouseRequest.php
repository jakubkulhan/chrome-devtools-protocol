<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setEmitTouchEventsForMouse command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetEmitTouchEventsForMouseRequest implements \JsonSerializable
{
	/**
	 * Whether touch emulation based on mouse input should be enabled.
	 *
	 * @var bool
	 */
	public $enabled;

	/**
	 * Touch/gesture events configuration. Default: current platform.
	 *
	 * @var string|null
	 */
	public $configuration;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->enabled)) {
			$instance->enabled = (bool)$data->enabled;
		}
		if (isset($data->configuration)) {
			$instance->configuration = (string)$data->configuration;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->enabled !== null) {
			$data->enabled = $this->enabled;
		}
		if ($this->configuration !== null) {
			$data->configuration = $this->configuration;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetEmitTouchEventsForMouseRequestBuilder
	 */
	public static function builder(): SetEmitTouchEventsForMouseRequestBuilder
	{
		return new SetEmitTouchEventsForMouseRequestBuilder();
	}
}
