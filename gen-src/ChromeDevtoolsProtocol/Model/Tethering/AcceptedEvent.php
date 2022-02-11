<?php

namespace ChromeDevtoolsProtocol\Model\Tethering;

/**
 * Informs that port was successfully bound and got a specified connection id.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AcceptedEvent implements \JsonSerializable
{
	/**
	 * Port number that was successfully bound.
	 *
	 * @var int
	 */
	public $port;

	/**
	 * Connection id to be used.
	 *
	 * @var string
	 */
	public $connectionId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->port)) {
			$instance->port = (int)$data->port;
		}
		if (isset($data->connectionId)) {
			$instance->connectionId = (string)$data->connectionId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->port !== null) {
			$data->port = $this->port;
		}
		if ($this->connectionId !== null) {
			$data->connectionId = $this->connectionId;
		}
		return $data;
	}
}
