<?php
namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * HTTP request data.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Request implements \JsonSerializable
{
	/**
	 * Request URL.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * HTTP request method.
	 *
	 * @var string
	 */
	public $method;

	/**
	 * HTTP request headers.
	 *
	 * @var Headers
	 */
	public $headers;

	/**
	 * HTTP POST request data.
	 *
	 * @var string|null
	 */
	public $postData;

	/**
	 * The mixed content type of the request.
	 *
	 * @var string
	 */
	public $mixedContentType;

	/**
	 * Priority of the resource request at the time request is sent.
	 *
	 * @var string
	 */
	public $initialPriority;

	/**
	 * The referrer policy of the request, as defined in https://www.w3.org/TR/referrer-policy/
	 *
	 * @var string
	 */
	public $referrerPolicy;

	/**
	 * Whether is loaded via link preload.
	 *
	 * @var bool|null
	 */
	public $isLinkPreload;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->method)) {
			$instance->method = (string)$data->method;
		}
		if (isset($data->headers)) {
			$instance->headers = Headers::fromJson($data->headers);
		}
		if (isset($data->postData)) {
			$instance->postData = (string)$data->postData;
		}
		if (isset($data->mixedContentType)) {
			$instance->mixedContentType = (string)$data->mixedContentType;
		}
		if (isset($data->initialPriority)) {
			$instance->initialPriority = (string)$data->initialPriority;
		}
		if (isset($data->referrerPolicy)) {
			$instance->referrerPolicy = (string)$data->referrerPolicy;
		}
		if (isset($data->isLinkPreload)) {
			$instance->isLinkPreload = (bool)$data->isLinkPreload;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->method !== null) {
			$data->method = $this->method;
		}
		if ($this->headers !== null) {
			$data->headers = $this->headers->jsonSerialize();
		}
		if ($this->postData !== null) {
			$data->postData = $this->postData;
		}
		if ($this->mixedContentType !== null) {
			$data->mixedContentType = $this->mixedContentType;
		}
		if ($this->initialPriority !== null) {
			$data->initialPriority = $this->initialPriority;
		}
		if ($this->referrerPolicy !== null) {
			$data->referrerPolicy = $this->referrerPolicy;
		}
		if ($this->isLinkPreload !== null) {
			$data->isLinkPreload = $this->isLinkPreload;
		}
		return $data;
	}
}
