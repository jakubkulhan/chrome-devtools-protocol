<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowWindowControlsOverlayRequestBuilder
{
	private $windowControlsOverlayConfig;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetShowWindowControlsOverlayRequest
	{
		$instance = new SetShowWindowControlsOverlayRequest();
		$instance->windowControlsOverlayConfig = $this->windowControlsOverlayConfig;
		return $instance;
	}


	/**
	 * @param WindowControlsOverlayConfig|null $windowControlsOverlayConfig
	 *
	 * @return self
	 */
	public function setWindowControlsOverlayConfig($windowControlsOverlayConfig): self
	{
		$this->windowControlsOverlayConfig = $windowControlsOverlayConfig;
		return $this;
	}
}
