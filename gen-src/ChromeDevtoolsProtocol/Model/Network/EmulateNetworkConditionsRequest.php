<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.emulateNetworkConditions command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EmulateNetworkConditionsRequest implements \JsonSerializable
{
	/**
	 * True to emulate internet disconnection.
	 *
	 * @var bool
	 */
	public $offline;

	/**
	 * Minimum latency from request sent to response headers received (ms).
	 *
	 * @var int|float
	 */
	public $latency;

	/**
	 * Maximal aggregated download throughput (bytes/sec). -1 disables download throttling.
	 *
	 * @var int|float
	 */
	public $downloadThroughput;

	/**
	 * Maximal aggregated upload throughput (bytes/sec). -1 disables upload throttling.
	 *
	 * @var int|float
	 */
	public $uploadThroughput;

	/**
	 * Connection type if known.
	 *
	 * @var string
	 */
	public $connectionType;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->offline)) {
			$instance->offline = (bool)$data->offline;
		}
		if (isset($data->latency)) {
			$instance->latency = $data->latency;
		}
		if (isset($data->downloadThroughput)) {
			$instance->downloadThroughput = $data->downloadThroughput;
		}
		if (isset($data->uploadThroughput)) {
			$instance->uploadThroughput = $data->uploadThroughput;
		}
		if (isset($data->connectionType)) {
			$instance->connectionType = (string)$data->connectionType;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->offline !== null) {
			$data->offline = $this->offline;
		}
		if ($this->latency !== null) {
			$data->latency = $this->latency;
		}
		if ($this->downloadThroughput !== null) {
			$data->downloadThroughput = $this->downloadThroughput;
		}
		if ($this->uploadThroughput !== null) {
			$data->uploadThroughput = $this->uploadThroughput;
		}
		if ($this->connectionType !== null) {
			$data->connectionType = $this->connectionType;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return EmulateNetworkConditionsRequestBuilder
	 */
	public static function builder(): EmulateNetworkConditionsRequestBuilder
	{
		return new EmulateNetworkConditionsRequestBuilder();
	}
}
