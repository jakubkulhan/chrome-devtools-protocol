<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

/**
 * Request for ServiceWorker.skipWaiting command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SkipWaitingRequest implements \JsonSerializable
{
	/** @var string */
	public $scopeURL;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scopeURL)) {
			$instance->scopeURL = (string)$data->scopeURL;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scopeURL !== null) {
			$data->scopeURL = $this->scopeURL;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SkipWaitingRequestBuilder
	 */
	public static function builder(): SkipWaitingRequestBuilder
	{
		return new SkipWaitingRequestBuilder();
	}
}
