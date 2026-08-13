<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Model\DOM\Rect;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetVirtualKeyboardGeometryOverrideRequestBuilder
{
	private $keyboardRect;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetVirtualKeyboardGeometryOverrideRequest
	{
		$instance = new SetVirtualKeyboardGeometryOverrideRequest();
		$instance->keyboardRect = $this->keyboardRect;
		return $instance;
	}


	/**
	 * @param Rect|null $keyboardRect
	 *
	 * @return self
	 */
	public function setKeyboardRect($keyboardRect): self
	{
		$this->keyboardRect = $keyboardRect;
		return $this;
	}
}
