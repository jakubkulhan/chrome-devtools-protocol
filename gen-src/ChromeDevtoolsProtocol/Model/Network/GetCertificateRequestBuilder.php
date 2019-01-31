<?php

namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetCertificateRequestBuilder
{
	private $origin;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetCertificateRequest
	{
		$instance = new GetCertificateRequest();
		if ($this->origin === null) {
			throw new BuilderException('Property [origin] is required.');
		}
		$instance->origin = $this->origin;
		return $instance;
	}


	/**
	 * @param string $origin
	 *
	 * @return self
	 */
	public function setOrigin($origin): self
	{
		$this->origin = $origin;
		return $this;
	}
}
