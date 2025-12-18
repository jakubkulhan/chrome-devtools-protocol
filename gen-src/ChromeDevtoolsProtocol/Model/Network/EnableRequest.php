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
	 * Whether DirectSocket chunk send/receive events should be reported.
	 *
	 * @var bool|null
	 */
	public $reportDirectSocketTraffic;

	/**
	 * Enable storing response bodies outside of renderer, so that these survive a cross-process navigation. Requires maxTotalBufferSize to be set. Currently defaults to false. This field is being deprecated in favor of the dedicated configureDurableMessages command, due to the possibility of deadlocks when awaiting Network.enable before issuing Runtime.runIfWaitingForDebugger.
	 *
	 * @var bool|null
	 */
	public $enableDurableMessages;


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
		if (isset($data->reportDirectSocketTraffic)) {
			$instance->reportDirectSocketTraffic = (bool)$data->reportDirectSocketTraffic;
		}
		if (isset($data->enableDurableMessages)) {
			$instance->enableDurableMessages = (bool)$data->enableDurableMessages;
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
		if ($this->reportDirectSocketTraffic !== null) {
			$data->reportDirectSocketTraffic = $this->reportDirectSocketTraffic;
		}
		if ($this->enableDurableMessages !== null) {
			$data->enableDurableMessages = $this->enableDurableMessages;
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
