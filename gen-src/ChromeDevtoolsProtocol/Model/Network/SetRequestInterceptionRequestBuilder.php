<?php

namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetRequestInterceptionRequestBuilder
{
	private $patterns;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetRequestInterceptionRequest
	{
		$instance = new SetRequestInterceptionRequest();
		if ($this->patterns === null) {
			throw new BuilderException('Property [patterns] is required.');
		}
		$instance->patterns = $this->patterns;
		return $instance;
	}


	/**
	 * @param RequestPattern[] $patterns
	 *
	 * @return self
	 */
	public function setPatterns($patterns): self
	{
		$this->patterns = $patterns;
		return $this;
	}
}
