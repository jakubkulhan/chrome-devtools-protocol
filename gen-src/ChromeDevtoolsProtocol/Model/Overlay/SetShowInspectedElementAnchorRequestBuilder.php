<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowInspectedElementAnchorRequestBuilder
{
	private $inspectedElementAnchorConfig;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetShowInspectedElementAnchorRequest
	{
		$instance = new SetShowInspectedElementAnchorRequest();
		if ($this->inspectedElementAnchorConfig === null) {
			throw new BuilderException('Property [inspectedElementAnchorConfig] is required.');
		}
		$instance->inspectedElementAnchorConfig = $this->inspectedElementAnchorConfig;
		return $instance;
	}


	/**
	 * @param InspectedElementAnchorConfig $inspectedElementAnchorConfig
	 *
	 * @return self
	 */
	public function setInspectedElementAnchorConfig($inspectedElementAnchorConfig): self
	{
		$this->inspectedElementAnchorConfig = $inspectedElementAnchorConfig;
		return $this;
	}
}
