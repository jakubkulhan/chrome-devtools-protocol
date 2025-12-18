<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.configureDurableMessages command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ConfigureDurableMessagesRequest implements \JsonSerializable
{
	/**
	 * Buffer size in bytes to use when preserving network payloads (XHRs, etc).
	 *
	 * @var int|null
	 */
	public $maxTotalBufferSize;

	/**
	 * Per-resource buffer size in bytes to use when preserving network payloads (XHRs, etc).
	 *
	 * @var int|null
	 */
	public $maxResourceBufferSize;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->maxTotalBufferSize)) {
			$instance->maxTotalBufferSize = (int)$data->maxTotalBufferSize;
		}
		if (isset($data->maxResourceBufferSize)) {
			$instance->maxResourceBufferSize = (int)$data->maxResourceBufferSize;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->maxTotalBufferSize !== null) {
			$data->maxTotalBufferSize = $this->maxTotalBufferSize;
		}
		if ($this->maxResourceBufferSize !== null) {
			$data->maxResourceBufferSize = $this->maxResourceBufferSize;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ConfigureDurableMessagesRequestBuilder
	 */
	public static function builder(): ConfigureDurableMessagesRequestBuilder
	{
		return new ConfigureDurableMessagesRequestBuilder();
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
