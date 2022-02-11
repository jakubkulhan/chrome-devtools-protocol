<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

use ChromeDevtoolsProtocol\Model\Network\Request;

/**
 * Issued when the domain is enabled with handleAuthRequests set to true. The request is paused until client responds with continueWithAuth.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AuthRequiredEvent implements \JsonSerializable
{
	/**
	 * Each request the page makes will have a unique id.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * The details of the request.
	 *
	 * @var Request
	 */
	public $request;

	/**
	 * The id of the frame that initiated the request.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * How the requested resource will be used.
	 *
	 * @var string
	 */
	public $resourceType;

	/**
	 * Details of the Authorization Challenge encountered. If this is set, client should respond with continueRequest that contains AuthChallengeResponse.
	 *
	 * @var AuthChallenge
	 */
	public $authChallenge;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->request)) {
			$instance->request = Request::fromJson($data->request);
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->resourceType)) {
			$instance->resourceType = (string)$data->resourceType;
		}
		if (isset($data->authChallenge)) {
			$instance->authChallenge = AuthChallenge::fromJson($data->authChallenge);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->request !== null) {
			$data->request = $this->request->jsonSerialize();
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->resourceType !== null) {
			$data->resourceType = $this->resourceType;
		}
		if ($this->authChallenge !== null) {
			$data->authChallenge = $this->authChallenge->jsonSerialize();
		}
		return $data;
	}
}
