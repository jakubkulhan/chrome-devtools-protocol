<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetEmulatedOSTextScaleRequestBuilder
{
	private $scale;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetEmulatedOSTextScaleRequest
	{
		$instance = new SetEmulatedOSTextScaleRequest();
		$instance->scale = $this->scale;
		return $instance;
	}


	/**
	 * @param int|float|null $scale
	 *
	 * @return self
	 */
	public function setScale($scale): self
	{
		$this->scale = $scale;
		return $this;
	}
}
