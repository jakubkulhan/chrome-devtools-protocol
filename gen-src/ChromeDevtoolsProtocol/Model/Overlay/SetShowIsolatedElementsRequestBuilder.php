<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowIsolatedElementsRequestBuilder
{
	private $isolatedElementHighlightConfigs;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetShowIsolatedElementsRequest
	{
		$instance = new SetShowIsolatedElementsRequest();
		if ($this->isolatedElementHighlightConfigs === null) {
			throw new BuilderException('Property [isolatedElementHighlightConfigs] is required.');
		}
		$instance->isolatedElementHighlightConfigs = $this->isolatedElementHighlightConfigs;
		return $instance;
	}


	/**
	 * @param IsolatedElementHighlightConfig[] $isolatedElementHighlightConfigs
	 *
	 * @return self
	 */
	public function setIsolatedElementHighlightConfigs($isolatedElementHighlightConfigs): self
	{
		$this->isolatedElementHighlightConfigs = $isolatedElementHighlightConfigs;
		return $this;
	}
}
