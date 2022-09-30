<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * HTTP response data.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Response implements \JsonSerializable
{
	/**
	 * Response URL. This URL can be different from CachedResource.url in case of redirect.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * HTTP response status code.
	 *
	 * @var int
	 */
	public $status;

	/**
	 * HTTP response status text.
	 *
	 * @var string
	 */
	public $statusText;

	/**
	 * HTTP response headers.
	 *
	 * @var Headers
	 */
	public $headers;

	/**
	 * HTTP response headers text. This has been replaced by the headers in Network.responseReceivedExtraInfo.
	 *
	 * @var string|null
	 */
	public $headersText;

	/**
	 * Resource mimeType as determined by the browser.
	 *
	 * @var string
	 */
	public $mimeType;

	/**
	 * Refined HTTP request headers that were actually transmitted over the network.
	 *
	 * @var Headers|null
	 */
	public $requestHeaders;

	/**
	 * HTTP request headers text. This has been replaced by the headers in Network.requestWillBeSentExtraInfo.
	 *
	 * @var string|null
	 */
	public $requestHeadersText;

	/**
	 * Specifies whether physical connection was actually reused for this request.
	 *
	 * @var bool
	 */
	public $connectionReused;

	/**
	 * Physical connection id that was actually used for this request.
	 *
	 * @var int|float
	 */
	public $connectionId;

	/**
	 * Remote IP address.
	 *
	 * @var string|null
	 */
	public $remoteIPAddress;

	/**
	 * Remote port.
	 *
	 * @var int|null
	 */
	public $remotePort;

	/**
	 * Specifies that the request was served from the disk cache.
	 *
	 * @var bool|null
	 */
	public $fromDiskCache;

	/**
	 * Specifies that the request was served from the ServiceWorker.
	 *
	 * @var bool|null
	 */
	public $fromServiceWorker;

	/**
	 * Specifies that the request was served from the prefetch cache.
	 *
	 * @var bool|null
	 */
	public $fromPrefetchCache;

	/**
	 * Total number of bytes received for this request so far.
	 *
	 * @var int|float
	 */
	public $encodedDataLength;

	/**
	 * Timing information for the given request.
	 *
	 * @var ResourceTiming|null
	 */
	public $timing;

	/**
	 * Response source of response from ServiceWorker.
	 *
	 * @var string
	 */
	public $serviceWorkerResponseSource;

	/**
	 * The time at which the returned response was generated.
	 *
	 * @var int|float
	 */
	public $responseTime;

	/**
	 * Cache Storage Cache Name.
	 *
	 * @var string|null
	 */
	public $cacheStorageCacheName;

	/**
	 * Protocol used to fetch this request.
	 *
	 * @var string|null
	 */
	public $protocol;

	/**
	 * The reason why Chrome uses a specific transport protocol for HTTP semantics.
	 *
	 * @var string
	 */
	public $alternateProtocolUsage;

	/**
	 * Security state of the request resource.
	 *
	 * @var string
	 */
	public $securityState;

	/**
	 * Security details for the request.
	 *
	 * @var SecurityDetails|null
	 */
	public $securityDetails;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->status)) {
			$instance->status = (int)$data->status;
		}
		if (isset($data->statusText)) {
			$instance->statusText = (string)$data->statusText;
		}
		if (isset($data->headers)) {
			$instance->headers = Headers::fromJson($data->headers);
		}
		if (isset($data->headersText)) {
			$instance->headersText = (string)$data->headersText;
		}
		if (isset($data->mimeType)) {
			$instance->mimeType = (string)$data->mimeType;
		}
		if (isset($data->requestHeaders)) {
			$instance->requestHeaders = Headers::fromJson($data->requestHeaders);
		}
		if (isset($data->requestHeadersText)) {
			$instance->requestHeadersText = (string)$data->requestHeadersText;
		}
		if (isset($data->connectionReused)) {
			$instance->connectionReused = (bool)$data->connectionReused;
		}
		if (isset($data->connectionId)) {
			$instance->connectionId = $data->connectionId;
		}
		if (isset($data->remoteIPAddress)) {
			$instance->remoteIPAddress = (string)$data->remoteIPAddress;
		}
		if (isset($data->remotePort)) {
			$instance->remotePort = (int)$data->remotePort;
		}
		if (isset($data->fromDiskCache)) {
			$instance->fromDiskCache = (bool)$data->fromDiskCache;
		}
		if (isset($data->fromServiceWorker)) {
			$instance->fromServiceWorker = (bool)$data->fromServiceWorker;
		}
		if (isset($data->fromPrefetchCache)) {
			$instance->fromPrefetchCache = (bool)$data->fromPrefetchCache;
		}
		if (isset($data->encodedDataLength)) {
			$instance->encodedDataLength = $data->encodedDataLength;
		}
		if (isset($data->timing)) {
			$instance->timing = ResourceTiming::fromJson($data->timing);
		}
		if (isset($data->serviceWorkerResponseSource)) {
			$instance->serviceWorkerResponseSource = (string)$data->serviceWorkerResponseSource;
		}
		if (isset($data->responseTime)) {
			$instance->responseTime = $data->responseTime;
		}
		if (isset($data->cacheStorageCacheName)) {
			$instance->cacheStorageCacheName = (string)$data->cacheStorageCacheName;
		}
		if (isset($data->protocol)) {
			$instance->protocol = (string)$data->protocol;
		}
		if (isset($data->alternateProtocolUsage)) {
			$instance->alternateProtocolUsage = (string)$data->alternateProtocolUsage;
		}
		if (isset($data->securityState)) {
			$instance->securityState = (string)$data->securityState;
		}
		if (isset($data->securityDetails)) {
			$instance->securityDetails = SecurityDetails::fromJson($data->securityDetails);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->status !== null) {
			$data->status = $this->status;
		}
		if ($this->statusText !== null) {
			$data->statusText = $this->statusText;
		}
		if ($this->headers !== null) {
			$data->headers = $this->headers->jsonSerialize();
		}
		if ($this->headersText !== null) {
			$data->headersText = $this->headersText;
		}
		if ($this->mimeType !== null) {
			$data->mimeType = $this->mimeType;
		}
		if ($this->requestHeaders !== null) {
			$data->requestHeaders = $this->requestHeaders->jsonSerialize();
		}
		if ($this->requestHeadersText !== null) {
			$data->requestHeadersText = $this->requestHeadersText;
		}
		if ($this->connectionReused !== null) {
			$data->connectionReused = $this->connectionReused;
		}
		if ($this->connectionId !== null) {
			$data->connectionId = $this->connectionId;
		}
		if ($this->remoteIPAddress !== null) {
			$data->remoteIPAddress = $this->remoteIPAddress;
		}
		if ($this->remotePort !== null) {
			$data->remotePort = $this->remotePort;
		}
		if ($this->fromDiskCache !== null) {
			$data->fromDiskCache = $this->fromDiskCache;
		}
		if ($this->fromServiceWorker !== null) {
			$data->fromServiceWorker = $this->fromServiceWorker;
		}
		if ($this->fromPrefetchCache !== null) {
			$data->fromPrefetchCache = $this->fromPrefetchCache;
		}
		if ($this->encodedDataLength !== null) {
			$data->encodedDataLength = $this->encodedDataLength;
		}
		if ($this->timing !== null) {
			$data->timing = $this->timing->jsonSerialize();
		}
		if ($this->serviceWorkerResponseSource !== null) {
			$data->serviceWorkerResponseSource = $this->serviceWorkerResponseSource;
		}
		if ($this->responseTime !== null) {
			$data->responseTime = $this->responseTime;
		}
		if ($this->cacheStorageCacheName !== null) {
			$data->cacheStorageCacheName = $this->cacheStorageCacheName;
		}
		if ($this->protocol !== null) {
			$data->protocol = $this->protocol;
		}
		if ($this->alternateProtocolUsage !== null) {
			$data->alternateProtocolUsage = $this->alternateProtocolUsage;
		}
		if ($this->securityState !== null) {
			$data->securityState = $this->securityState;
		}
		if ($this->securityDetails !== null) {
			$data->securityDetails = $this->securityDetails->jsonSerialize();
		}
		return $data;
	}
}
