<?php

namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPrerenderingAllowedRequestBuilder
{
	private $isAllowed;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetPrerenderingAllowedRequest
	{
		$instance = new SetPrerenderingAllowedRequest();
		if ($this->isAllowed === null) {
			throw new BuilderException('Property [isAllowed] is required.');
		}
		$instance->isAllowed = $this->isAllowed;
		return $instance;
	}


	/**
	 * @param bool $isAllowed
	 *
	 * @return self
	 */
	public function setIsAllowed($isAllowed): self
	{
		$this->isAllowed = $isAllowed;
		return $this;
	}
}
