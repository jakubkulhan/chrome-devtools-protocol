<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Timing information for the request.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ResourceTiming implements \JsonSerializable
{
	/**
	 * Timing's requestTime is a baseline in seconds, while the other numbers are ticks in milliseconds relatively to this requestTime.
	 *
	 * @var int|float
	 */
	public $requestTime;

	/**
	 * Started resolving proxy.
	 *
	 * @var int|float
	 */
	public $proxyStart;

	/**
	 * Finished resolving proxy.
	 *
	 * @var int|float
	 */
	public $proxyEnd;

	/**
	 * Started DNS address resolve.
	 *
	 * @var int|float
	 */
	public $dnsStart;

	/**
	 * Finished DNS address resolve.
	 *
	 * @var int|float
	 */
	public $dnsEnd;

	/**
	 * Started connecting to the remote host.
	 *
	 * @var int|float
	 */
	public $connectStart;

	/**
	 * Connected to the remote host.
	 *
	 * @var int|float
	 */
	public $connectEnd;

	/**
	 * Started SSL handshake.
	 *
	 * @var int|float
	 */
	public $sslStart;

	/**
	 * Finished SSL handshake.
	 *
	 * @var int|float
	 */
	public $sslEnd;

	/**
	 * Started running ServiceWorker.
	 *
	 * @var int|float
	 */
	public $workerStart;

	/**
	 * Finished Starting ServiceWorker.
	 *
	 * @var int|float
	 */
	public $workerReady;

	/**
	 * Started fetch event.
	 *
	 * @var int|float
	 */
	public $workerFetchStart;

	/**
	 * Settled fetch event respondWith promise.
	 *
	 * @var int|float
	 */
	public $workerRespondWithSettled;

	/**
	 * Started sending request.
	 *
	 * @var int|float
	 */
	public $sendStart;

	/**
	 * Finished sending request.
	 *
	 * @var int|float
	 */
	public $sendEnd;

	/**
	 * Time the server started pushing request.
	 *
	 * @var int|float
	 */
	public $pushStart;

	/**
	 * Time the server finished pushing request.
	 *
	 * @var int|float
	 */
	public $pushEnd;

	/**
	 * Finished receiving response headers.
	 *
	 * @var int|float
	 */
	public $receiveHeadersEnd;


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
		if (isset($data->proxyStart)) {
			$instance->proxyStart = $data->proxyStart;
		}
		if (isset($data->proxyEnd)) {
			$instance->proxyEnd = $data->proxyEnd;
		}
		if (isset($data->dnsStart)) {
			$instance->dnsStart = $data->dnsStart;
		}
		if (isset($data->dnsEnd)) {
			$instance->dnsEnd = $data->dnsEnd;
		}
		if (isset($data->connectStart)) {
			$instance->connectStart = $data->connectStart;
		}
		if (isset($data->connectEnd)) {
			$instance->connectEnd = $data->connectEnd;
		}
		if (isset($data->sslStart)) {
			$instance->sslStart = $data->sslStart;
		}
		if (isset($data->sslEnd)) {
			$instance->sslEnd = $data->sslEnd;
		}
		if (isset($data->workerStart)) {
			$instance->workerStart = $data->workerStart;
		}
		if (isset($data->workerReady)) {
			$instance->workerReady = $data->workerReady;
		}
		if (isset($data->workerFetchStart)) {
			$instance->workerFetchStart = $data->workerFetchStart;
		}
		if (isset($data->workerRespondWithSettled)) {
			$instance->workerRespondWithSettled = $data->workerRespondWithSettled;
		}
		if (isset($data->sendStart)) {
			$instance->sendStart = $data->sendStart;
		}
		if (isset($data->sendEnd)) {
			$instance->sendEnd = $data->sendEnd;
		}
		if (isset($data->pushStart)) {
			$instance->pushStart = $data->pushStart;
		}
		if (isset($data->pushEnd)) {
			$instance->pushEnd = $data->pushEnd;
		}
		if (isset($data->receiveHeadersEnd)) {
			$instance->receiveHeadersEnd = $data->receiveHeadersEnd;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestTime !== null) {
			$data->requestTime = $this->requestTime;
		}
		if ($this->proxyStart !== null) {
			$data->proxyStart = $this->proxyStart;
		}
		if ($this->proxyEnd !== null) {
			$data->proxyEnd = $this->proxyEnd;
		}
		if ($this->dnsStart !== null) {
			$data->dnsStart = $this->dnsStart;
		}
		if ($this->dnsEnd !== null) {
			$data->dnsEnd = $this->dnsEnd;
		}
		if ($this->connectStart !== null) {
			$data->connectStart = $this->connectStart;
		}
		if ($this->connectEnd !== null) {
			$data->connectEnd = $this->connectEnd;
		}
		if ($this->sslStart !== null) {
			$data->sslStart = $this->sslStart;
		}
		if ($this->sslEnd !== null) {
			$data->sslEnd = $this->sslEnd;
		}
		if ($this->workerStart !== null) {
			$data->workerStart = $this->workerStart;
		}
		if ($this->workerReady !== null) {
			$data->workerReady = $this->workerReady;
		}
		if ($this->workerFetchStart !== null) {
			$data->workerFetchStart = $this->workerFetchStart;
		}
		if ($this->workerRespondWithSettled !== null) {
			$data->workerRespondWithSettled = $this->workerRespondWithSettled;
		}
		if ($this->sendStart !== null) {
			$data->sendStart = $this->sendStart;
		}
		if ($this->sendEnd !== null) {
			$data->sendEnd = $this->sendEnd;
		}
		if ($this->pushStart !== null) {
			$data->pushStart = $this->pushStart;
		}
		if ($this->pushEnd !== null) {
			$data->pushEnd = $this->pushEnd;
		}
		if ($this->receiveHeadersEnd !== null) {
			$data->receiveHeadersEnd = $this->receiveHeadersEnd;
		}
		return $data;
	}
}
