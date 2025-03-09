<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Named type Network.DirectTCPSocketOptions.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DirectTCPSocketOptions implements \JsonSerializable
{
	/**
	 * TCP_NODELAY option
	 *
	 * @var bool
	 */
	public $noDelay;

	/**
	 * Expected to be unsigned integer.
	 *
	 * @var int|float|null
	 */
	public $keepAliveDelay;

	/**
	 * Expected to be unsigned integer.
	 *
	 * @var int|float|null
	 */
	public $sendBufferSize;

	/**
	 * Expected to be unsigned integer.
	 *
	 * @var int|float|null
	 */
	public $receiveBufferSize;

	/** @var string */
	public $dnsQueryType;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->noDelay)) {
			$instance->noDelay = (bool)$data->noDelay;
		}
		if (isset($data->keepAliveDelay)) {
			$instance->keepAliveDelay = $data->keepAliveDelay;
		}
		if (isset($data->sendBufferSize)) {
			$instance->sendBufferSize = $data->sendBufferSize;
		}
		if (isset($data->receiveBufferSize)) {
			$instance->receiveBufferSize = $data->receiveBufferSize;
		}
		if (isset($data->dnsQueryType)) {
			$instance->dnsQueryType = (string)$data->dnsQueryType;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->noDelay !== null) {
			$data->noDelay = $this->noDelay;
		}
		if ($this->keepAliveDelay !== null) {
			$data->keepAliveDelay = $this->keepAliveDelay;
		}
		if ($this->sendBufferSize !== null) {
			$data->sendBufferSize = $this->sendBufferSize;
		}
		if ($this->receiveBufferSize !== null) {
			$data->receiveBufferSize = $this->receiveBufferSize;
		}
		if ($this->dnsQueryType !== null) {
			$data->dnsQueryType = $this->dnsQueryType;
		}
		return $data;
	}
}
