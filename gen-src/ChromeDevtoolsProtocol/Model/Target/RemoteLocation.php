<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Named type Target.RemoteLocation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoteLocation implements \JsonSerializable
{
	/** @var string */
	public $host;

	/** @var int */
	public $port;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->host)) {
			$instance->host = (string)$data->host;
		}
		if (isset($data->port)) {
			$instance->port = (int)$data->port;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->host !== null) {
			$data->host = $this->host;
		}
		if ($this->port !== null) {
			$data->port = $this->port;
		}
		return $data;
	}
}
