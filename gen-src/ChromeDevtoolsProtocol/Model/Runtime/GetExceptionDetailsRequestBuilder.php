<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetExceptionDetailsRequestBuilder
{
	private $errorObjectId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetExceptionDetailsRequest
	{
		$instance = new GetExceptionDetailsRequest();
		if ($this->errorObjectId === null) {
			throw new BuilderException('Property [errorObjectId] is required.');
		}
		$instance->errorObjectId = $this->errorObjectId;
		return $instance;
	}


	/**
	 * @param string $errorObjectId
	 *
	 * @return self
	 */
	public function setErrorObjectId($errorObjectId): self
	{
		$this->errorObjectId = $errorObjectId;
		return $this;
	}
}
