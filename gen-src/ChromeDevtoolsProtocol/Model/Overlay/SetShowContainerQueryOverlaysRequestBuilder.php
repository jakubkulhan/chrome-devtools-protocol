<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowContainerQueryOverlaysRequestBuilder
{
	private $containerQueryHighlightConfigs;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetShowContainerQueryOverlaysRequest
	{
		$instance = new SetShowContainerQueryOverlaysRequest();
		if ($this->containerQueryHighlightConfigs === null) {
			throw new BuilderException('Property [containerQueryHighlightConfigs] is required.');
		}
		$instance->containerQueryHighlightConfigs = $this->containerQueryHighlightConfigs;
		return $instance;
	}


	/**
	 * @param ContainerQueryHighlightConfig[] $containerQueryHighlightConfigs
	 *
	 * @return self
	 */
	public function setContainerQueryHighlightConfigs($containerQueryHighlightConfigs): self
	{
		$this->containerQueryHighlightConfigs = $containerQueryHighlightConfigs;
		return $this;
	}
}
