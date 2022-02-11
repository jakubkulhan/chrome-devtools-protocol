<?php

namespace ChromeDevtoolsProtocol\Model\Tethering;

/**
 * Request for Tethering.unbind command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class UnbindRequest implements \JsonSerializable
{
	/**
	 * Port number to unbind.
	 *
	 * @var int
	 */
	public $port;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->port !== null) {
			$data->port = $this->port;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return UnbindRequestBuilder
	 */
	public static function builder(): UnbindRequestBuilder
	{
		return new UnbindRequestBuilder();
	}
}
