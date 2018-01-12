<?php
namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetRequestPostDataRequestBuilder
{
	private $requestId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetRequestPostDataRequest
	{
		$instance = new GetRequestPostDataRequest();
		if ($this->requestId === null) {
			throw new BuilderException('Property [requestId] is required.');
		}
		$instance->requestId = $this->requestId;
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
}
