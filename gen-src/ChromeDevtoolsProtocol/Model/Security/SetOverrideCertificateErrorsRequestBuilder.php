<?php

namespace ChromeDevtoolsProtocol\Model\Security;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetOverrideCertificateErrorsRequestBuilder
{
	private $override;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetOverrideCertificateErrorsRequest
	{
		$instance = new SetOverrideCertificateErrorsRequest();
		if ($this->override === null) {
			throw new BuilderException('Property [override] is required.');
		}
		$instance->override = $this->override;
		return $instance;
	}


	/**
	 * @param bool $override
	 *
	 * @return self
	 */
	public function setOverride($override): self
	{
		$this->override = $override;
		return $this;
	}
}
