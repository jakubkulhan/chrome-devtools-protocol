<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContinueWithAuthRequestBuilder
{
	private $requestId;

	private $authChallengeResponse;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ContinueWithAuthRequest
	{
		$instance = new ContinueWithAuthRequest();
		if ($this->requestId === null) {
			throw new BuilderException('Property [requestId] is required.');
		}
		$instance->requestId = $this->requestId;
		if ($this->authChallengeResponse === null) {
			throw new BuilderException('Property [authChallengeResponse] is required.');
		}
		$instance->authChallengeResponse = $this->authChallengeResponse;
		return $instance;
	}


	/**
	 * @param string $requestId
	 *
	 * @return self
	 */
	public function setRequestId($requestId): self
	{
		$this->requestId = $requestId;
		return $this;
	}


	/**
	 * @param AuthChallengeResponse $authChallengeResponse
	 *
	 * @return self
	 */
	public function setAuthChallengeResponse($authChallengeResponse): self
	{
		$this->authChallengeResponse = $authChallengeResponse;
		return $this;
	}
}
