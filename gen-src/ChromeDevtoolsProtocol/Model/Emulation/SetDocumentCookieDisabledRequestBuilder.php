<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDocumentCookieDisabledRequestBuilder
{
	private $disabled;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetDocumentCookieDisabledRequest
	{
		$instance = new SetDocumentCookieDisabledRequest();
		if ($this->disabled === null) {
			throw new BuilderException('Property [disabled] is required.');
		}
		$instance->disabled = $this->disabled;
		return $instance;
	}


	/**
	 * @param bool $disabled
	 *
	 * @return self
	 */
	public function setDisabled($disabled): self
	{
		$this->disabled = $disabled;
		return $this;
	}
}
