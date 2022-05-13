<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequestBuilder
{
	private $enableUI;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EnableRequest
	{
		$instance = new EnableRequest();
		$instance->enableUI = $this->enableUI;
		return $instance;
	}


	/**
	 * @param bool|null $enableUI
	 *
	 * @return self
	 */
	public function setEnableUI($enableUI): self
	{
		$this->enableUI = $enableUI;
		return $this;
	}
}
