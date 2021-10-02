<?php

namespace ChromeDevtoolsProtocol\Model\ApplicationCache;

/**
 * Named type ApplicationCache.NetworkStateUpdatedEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class NetworkStateUpdatedEvent implements \JsonSerializable
{
	/** @var bool */
	public $isNowOnline;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->isNowOnline)) {
			$instance->isNowOnline = (bool)$data->isNowOnline;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->isNowOnline !== null) {
			$data->isNowOnline = $this->isNowOnline;
		}
		return $data;
	}
}
