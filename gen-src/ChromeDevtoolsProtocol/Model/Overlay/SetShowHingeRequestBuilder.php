<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowHingeRequestBuilder
{
	private $hingeConfig;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetShowHingeRequest
	{
		$instance = new SetShowHingeRequest();
		$instance->hingeConfig = $this->hingeConfig;
		return $instance;
	}


	/**
	 * @param HingeConfig|null $hingeConfig
	 *
	 * @return self
	 */
	public function setHingeConfig($hingeConfig): self
	{
		$this->hingeConfig = $hingeConfig;
		return $this;
	}
}
