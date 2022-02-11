<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * An options object that may be extended later to better support CORS, CORB and streaming.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LoadNetworkResourceOptions implements \JsonSerializable
{
	/** @var bool */
	public $disableCache;

	/** @var bool */
	public $includeCredentials;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->disableCache)) {
			$instance->disableCache = (bool)$data->disableCache;
		}
		if (isset($data->includeCredentials)) {
			$instance->includeCredentials = (bool)$data->includeCredentials;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->disableCache !== null) {
			$data->disableCache = $this->disableCache;
		}
		if ($this->includeCredentials !== null) {
			$data->includeCredentials = $this->includeCredentials;
		}
		return $data;
	}
}
