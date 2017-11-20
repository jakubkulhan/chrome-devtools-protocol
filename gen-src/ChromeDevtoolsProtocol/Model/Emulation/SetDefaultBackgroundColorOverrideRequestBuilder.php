<?php
namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Model\DOM\RGBA;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDefaultBackgroundColorOverrideRequestBuilder
{
	private $color;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetDefaultBackgroundColorOverrideRequest
	{
		$instance = new SetDefaultBackgroundColorOverrideRequest();
		$instance->color = $this->color;
		return $instance;
	}


	/**
	 * @param RGBA|null $color
	 *
	 * @return self
	 */
	public function setColor($color): self
	{
		$this->color = $color;
		return $this;
	}
}
