<?php

namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAcceptedEncodingsRequestBuilder
{
	private $encodings;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetAcceptedEncodingsRequest
	{
		$instance = new SetAcceptedEncodingsRequest();
		if ($this->encodings === null) {
			throw new BuilderException('Property [encodings] is required.');
		}
		$instance->encodings = $this->encodings;
		return $instance;
	}


	/**
	 * @param string[] $encodings
	 *
	 * @return self
	 */
	public function setEncodings($encodings): self
	{
		$this->encodings = $encodings;
		return $this;
	}
}
