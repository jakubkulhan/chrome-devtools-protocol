<?php

namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetResponseBodyForInterceptionRequestBuilder
{
	private $interceptionId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetResponseBodyForInterceptionRequest
	{
		$instance = new GetResponseBodyForInterceptionRequest();
		if ($this->interceptionId === null) {
			throw new BuilderException('Property [interceptionId] is required.');
		}
		$instance->interceptionId = $this->interceptionId;
		return $instance;
	}


	/**
	 * @param string $interceptionId
	 *
	 * @return self
	 */
	public function setInterceptionId($interceptionId): self
	{
		$this->interceptionId = $interceptionId;
		return $this;
	}
}
