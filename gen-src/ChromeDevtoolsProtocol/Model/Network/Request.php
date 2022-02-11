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
	 * Request URL (without fragment).
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Fragment of the requested URL starting with hash, if present.
	 *
	 * @var string|null
	 */
	public $urlFragment;

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
	 * True when the request has POST data. Note that postData might still be omitted when this flag is true when the data is too long.
	 *
	 * @var bool|null
	 */
	public $hasPostData;

	/**
	 * Request body elements. This will be converted from base64 to binary
	 *
	 * @var PostDataEntry[]|null
	 */
	public $postDataEntries;

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

	/**
	 * Set for requests when the TrustToken API is used. Contains the parameters passed by the developer (e.g. via "fetch") as understood by the backend.
	 *
	 * @var TrustTokenParams|null
	 */
	public $trustTokenParams;

	/**
	 * True if this resource request is considered to be the 'same site' as the request correspondinfg to the main frame.
	 *
	 * @var bool|null
	 */
	public $isSameSite;


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
		if (isset($data->urlFragment)) {
			$instance->urlFragment = (string)$data->urlFragment;
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
		if (isset($data->hasPostData)) {
			$instance->hasPostData = (bool)$data->hasPostData;
		}
		if (isset($data->postDataEntries)) {
			$instance->postDataEntries = [];
			foreach ($data->postDataEntries as $item) {
				$instance->postDataEntries[] = PostDataEntry::fromJson($item);
			}
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
		if (isset($data->trustTokenParams)) {
			$instance->trustTokenParams = TrustTokenParams::fromJson($data->trustTokenParams);
		}
		if (isset($data->isSameSite)) {
			$instance->isSameSite = (bool)$data->isSameSite;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->urlFragment !== null) {
			$data->urlFragment = $this->urlFragment;
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
		if ($this->hasPostData !== null) {
			$data->hasPostData = $this->hasPostData;
		}
		if ($this->postDataEntries !== null) {
			$data->postDataEntries = [];
			foreach ($this->postDataEntries as $item) {
				$data->postDataEntries[] = $item->jsonSerialize();
			}
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
		if ($this->trustTokenParams !== null) {
			$data->trustTokenParams = $this->trustTokenParams->jsonSerialize();
		}
		if ($this->isSameSite !== null) {
			$data->isSameSite = $this->isSameSite;
		}
		return $data;
	}
}
