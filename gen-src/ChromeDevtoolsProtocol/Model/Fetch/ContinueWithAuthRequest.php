<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

/**
 * Request for Fetch.continueWithAuth command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContinueWithAuthRequest implements \JsonSerializable
{
	/**
	 * An id the client received in authRequired event.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * Response to with an authChallenge.
	 *
	 * @var AuthChallengeResponse
	 */
	public $authChallengeResponse;


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
		if (isset($data->authChallengeResponse)) {
			$instance->authChallengeResponse = AuthChallengeResponse::fromJson($data->authChallengeResponse);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->authChallengeResponse !== null) {
			$data->authChallengeResponse = $this->authChallengeResponse->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ContinueWithAuthRequestBuilder
	 */
	public static function builder(): ContinueWithAuthRequestBuilder
	{
		return new ContinueWithAuthRequestBuilder();
	}
}
