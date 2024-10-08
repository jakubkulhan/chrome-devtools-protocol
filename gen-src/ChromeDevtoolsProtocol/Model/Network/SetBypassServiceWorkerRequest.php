<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.setBypassServiceWorker command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBypassServiceWorkerRequest implements \JsonSerializable
{
	/**
	 * Bypass service worker and load from network.
	 *
	 * @var bool
	 */
	public $bypass;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->bypass)) {
			$instance->bypass = (bool)$data->bypass;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->bypass !== null) {
			$data->bypass = $this->bypass;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetBypassServiceWorkerRequestBuilder
	 */
	public static function builder(): SetBypassServiceWorkerRequestBuilder
	{
		return new SetBypassServiceWorkerRequestBuilder();
	}
}
