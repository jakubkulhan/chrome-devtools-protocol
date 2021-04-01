<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowScrollSnapOverlaysRequestBuilder
{
	private $scrollSnapHighlightConfigs;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetShowScrollSnapOverlaysRequest
	{
		$instance = new SetShowScrollSnapOverlaysRequest();
		if ($this->scrollSnapHighlightConfigs === null) {
			throw new BuilderException('Property [scrollSnapHighlightConfigs] is required.');
		}
		$instance->scrollSnapHighlightConfigs = $this->scrollSnapHighlightConfigs;
		return $instance;
	}


	/**
	 * @param ScrollSnapHighlightConfig[] $scrollSnapHighlightConfigs
	 *
	 * @return self
	 */
	public function setScrollSnapHighlightConfigs($scrollSnapHighlightConfigs): self
	{
		$this->scrollSnapHighlightConfigs = $scrollSnapHighlightConfigs;
		return $this;
	}
}
