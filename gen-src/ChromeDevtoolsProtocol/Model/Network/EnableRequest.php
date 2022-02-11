<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.enable command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequest implements \JsonSerializable
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
	 * Longest post body size (in bytes) that would be included in requestWillBeSent notification
	 *
	 * @var int|null
	 */
	public $maxPostDataSize;


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
		if (isset($data->maxPostDataSize)) {
			$instance->maxPostDataSize = (int)$data->maxPostDataSize;
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
		if ($this->maxPostDataSize !== null) {
			$data->maxPostDataSize = $this->maxPostDataSize;
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
