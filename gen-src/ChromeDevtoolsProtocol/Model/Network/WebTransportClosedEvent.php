<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Named type Network.WebTransportClosedEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WebTransportClosedEvent implements \JsonSerializable
{
	/**
	 * WebTransport identifier.
	 *
	 * @var string
	 */
	public $transportId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->transportId)) {
			$instance->transportId = (string)$data->transportId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->transportId !== null) {
			$data->transportId = $this->transportId;
		}
		return $data;
	}
}
