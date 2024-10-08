<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Named type Network.ConnectTiming.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ConnectTiming implements \JsonSerializable
{
	/**
	 * Timing's requestTime is a baseline in seconds, while the other numbers are ticks in milliseconds relatively to this requestTime. Matches ResourceTiming's requestTime for the same request (but not for redirected requests).
	 *
	 * @var int|float
	 */
	public $requestTime;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestTime)) {
			$instance->requestTime = $data->requestTime;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestTime !== null) {
			$data->requestTime = $this->requestTime;
		}
		return $data;
	}
}
