<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Named type Network.DirectUDPSocketOptions.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DirectUDPSocketOptions implements \JsonSerializable
{
	/** @var string|null */
	public $remoteAddr;

	/**
	 * Unsigned int 16.
	 *
	 * @var int|null
	 */
	public $remotePort;

	/** @var string|null */
	public $localAddr;

	/**
	 * Unsigned int 16.
	 *
	 * @var int|null
	 */
	public $localPort;

	/** @var string */
	public $dnsQueryType;

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

	/** @var bool|null */
	public $multicastLoopback;

	/**
	 * Unsigned int 8.
	 *
	 * @var int|null
	 */
	public $multicastTimeToLive;

	/** @var bool|null */
	public $multicastAllowAddressSharing;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->remoteAddr)) {
			$instance->remoteAddr = (string)$data->remoteAddr;
		}
		if (isset($data->remotePort)) {
			$instance->remotePort = (int)$data->remotePort;
		}
		if (isset($data->localAddr)) {
			$instance->localAddr = (string)$data->localAddr;
		}
		if (isset($data->localPort)) {
			$instance->localPort = (int)$data->localPort;
		}
		if (isset($data->dnsQueryType)) {
			$instance->dnsQueryType = (string)$data->dnsQueryType;
		}
		if (isset($data->sendBufferSize)) {
			$instance->sendBufferSize = $data->sendBufferSize;
		}
		if (isset($data->receiveBufferSize)) {
			$instance->receiveBufferSize = $data->receiveBufferSize;
		}
		if (isset($data->multicastLoopback)) {
			$instance->multicastLoopback = (bool)$data->multicastLoopback;
		}
		if (isset($data->multicastTimeToLive)) {
			$instance->multicastTimeToLive = (int)$data->multicastTimeToLive;
		}
		if (isset($data->multicastAllowAddressSharing)) {
			$instance->multicastAllowAddressSharing = (bool)$data->multicastAllowAddressSharing;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->remoteAddr !== null) {
			$data->remoteAddr = $this->remoteAddr;
		}
		if ($this->remotePort !== null) {
			$data->remotePort = $this->remotePort;
		}
		if ($this->localAddr !== null) {
			$data->localAddr = $this->localAddr;
		}
		if ($this->localPort !== null) {
			$data->localPort = $this->localPort;
		}
		if ($this->dnsQueryType !== null) {
			$data->dnsQueryType = $this->dnsQueryType;
		}
		if ($this->sendBufferSize !== null) {
			$data->sendBufferSize = $this->sendBufferSize;
		}
		if ($this->receiveBufferSize !== null) {
			$data->receiveBufferSize = $this->receiveBufferSize;
		}
		if ($this->multicastLoopback !== null) {
			$data->multicastLoopback = $this->multicastLoopback;
		}
		if ($this->multicastTimeToLive !== null) {
			$data->multicastTimeToLive = $this->multicastTimeToLive;
		}
		if ($this->multicastAllowAddressSharing !== null) {
			$data->multicastAllowAddressSharing = $this->multicastAllowAddressSharing;
		}
		return $data;
	}
}
