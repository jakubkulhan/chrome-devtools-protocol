<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPressureSourceOverrideEnabledRequestBuilder
{
	private $enabled;
	private $source;
	private $metadata;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetPressureSourceOverrideEnabledRequest
	{
		$instance = new SetPressureSourceOverrideEnabledRequest();
		if ($this->enabled === null) {
			throw new BuilderException('Property [enabled] is required.');
		}
		$instance->enabled = $this->enabled;
		if ($this->source === null) {
			throw new BuilderException('Property [source] is required.');
		}
		$instance->source = $this->source;
		$instance->metadata = $this->metadata;
		return $instance;
	}


	/**
	 * @param bool $enabled
	 *
	 * @return self
	 */
	public function setEnabled($enabled): self
	{
		$this->enabled = $enabled;
		return $this;
	}


	/**
	 * @param string $source
	 *
	 * @return self
	 */
	public function setSource($source): self
	{
		$this->source = $source;
		return $this;
	}


	/**
	 * @param PressureMetadata|null $metadata
	 *
	 * @return self
	 */
	public function setMetadata($metadata): self
	{
		$this->metadata = $metadata;
		return $this;
	}
}
