<?php
namespace ChromeDevtoolsProtocol\Model\Security;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetIgnoreCertificateErrorsRequestBuilder
{
	private $ignore;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetIgnoreCertificateErrorsRequest
	{
		$instance = new SetIgnoreCertificateErrorsRequest();
		if ($this->ignore === null) {
			throw new BuilderException('Property [ignore] is required.');
		}
		$instance->ignore = $this->ignore;
		return $instance;
	}


	/**
	 * @param bool $ignore
	 *
	 * @return self
	 */
	public function setIgnore($ignore): self
	{
		$this->ignore = $ignore;
		return $this;
	}
}
