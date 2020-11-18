<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowFlexOverlaysRequestBuilder
{
	private $flexNodeHighlightConfigs;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetShowFlexOverlaysRequest
	{
		$instance = new SetShowFlexOverlaysRequest();
		if ($this->flexNodeHighlightConfigs === null) {
			throw new BuilderException('Property [flexNodeHighlightConfigs] is required.');
		}
		$instance->flexNodeHighlightConfigs = $this->flexNodeHighlightConfigs;
		return $instance;
	}


	/**
	 * @param FlexNodeHighlightConfig[] $flexNodeHighlightConfigs
	 *
	 * @return self
	 */
	public function setFlexNodeHighlightConfigs($flexNodeHighlightConfigs): self
	{
		$this->flexNodeHighlightConfigs = $flexNodeHighlightConfigs;
		return $this;
	}
}
