<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

/**
 * https://www.w3.org/TR/service-workers/#dictdef-routersourcedict
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ServiceWorkerRouterSourceDict implements \JsonSerializable
{
	/** @var string */
	public $cacheName;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->cacheName)) {
			$instance->cacheName = (string)$data->cacheName;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->cacheName !== null) {
			$data->cacheName = $this->cacheName;
		}
		return $data;
	}
}
