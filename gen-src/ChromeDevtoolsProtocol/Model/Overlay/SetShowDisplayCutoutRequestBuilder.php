<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowDisplayCutoutRequestBuilder
{
	private $displayCutoutConfig;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetShowDisplayCutoutRequest
	{
		$instance = new SetShowDisplayCutoutRequest();
		$instance->displayCutoutConfig = $this->displayCutoutConfig;
		return $instance;
	}


	/**
	 * @param DisplayCutoutConfig|null $displayCutoutConfig
	 *
	 * @return self
	 */
	public function setDisplayCutoutConfig($displayCutoutConfig): self
	{
		$this->displayCutoutConfig = $displayCutoutConfig;
		return $this;
	}
}
