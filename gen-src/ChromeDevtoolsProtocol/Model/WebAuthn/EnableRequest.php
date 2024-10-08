<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

/**
 * Request for WebAuthn.enable command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequest implements \JsonSerializable
{
	/**
	 * Whether to enable the WebAuthn user interface. Enabling the UI is recommended for debugging and demo purposes, as it is closer to the real experience. Disabling the UI is recommended for automated testing. Supported at the embedder's discretion if UI is available. Defaults to false.
	 *
	 * @var bool|null
	 */
	public $enableUI;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->enableUI)) {
			$instance->enableUI = (bool)$data->enableUI;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->enableUI !== null) {
			$data->enableUI = $this->enableUI;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return EnableRequestBuilder
	 */
	public static function builder(): EnableRequestBuilder
	{
		return new EnableRequestBuilder();
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
