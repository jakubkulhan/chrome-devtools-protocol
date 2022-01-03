<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

/**
 * Request for ServiceWorker.unregister command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class UnregisterRequest implements \JsonSerializable
{
	/** @var string */
	public $scopeURL;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scopeURL)) {
			$instance->scopeURL = (string)$data->scopeURL;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
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
	 * @return UnregisterRequestBuilder
	 */
	public static function builder(): UnregisterRequestBuilder
	{
		return new UnregisterRequestBuilder();
	}
}
