<?php

namespace ChromeDevtoolsProtocol\Model\Tethering;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class UnbindRequestBuilder
{
	private $port;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): UnbindRequest
	{
		$instance = new UnbindRequest();
		if ($this->port === null) {
			throw new BuilderException('Property [port] is required.');
		}
		$instance->port = $this->port;
		return $instance;
	}


	/**
	 * @param int $port
	 *
	 * @return self
	 */
	public function setPort($port): self
	{
		$this->port = $port;
		return $this;
	}
}
