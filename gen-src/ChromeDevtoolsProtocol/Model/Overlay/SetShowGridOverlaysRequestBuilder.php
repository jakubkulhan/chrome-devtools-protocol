<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowGridOverlaysRequestBuilder
{
	private $gridNodeHighlightConfigs;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetShowGridOverlaysRequest
	{
		$instance = new SetShowGridOverlaysRequest();
		if ($this->gridNodeHighlightConfigs === null) {
			throw new BuilderException('Property [gridNodeHighlightConfigs] is required.');
		}
		$instance->gridNodeHighlightConfigs = $this->gridNodeHighlightConfigs;
		return $instance;
	}


	/**
	 * @param GridNodeHighlightConfig[] $gridNodeHighlightConfigs
	 *
	 * @return self
	 */
	public function setGridNodeHighlightConfigs($gridNodeHighlightConfigs): self
	{
		$this->gridNodeHighlightConfigs = $gridNodeHighlightConfigs;
		return $this;
	}
}
