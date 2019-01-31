<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetEmitTouchEventsForMouseRequestBuilder
{
	private $enabled;

	private $configuration;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetEmitTouchEventsForMouseRequest
	{
		$instance = new SetEmitTouchEventsForMouseRequest();
		if ($this->enabled === null) {
			throw new BuilderException('Property [enabled] is required.');
		}
		$instance->enabled = $this->enabled;
		$instance->configuration = $this->configuration;
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
	 * @param string|null $configuration
	 *
	 * @return self
	 */
	public function setConfiguration($configuration): self
	{
		$this->configuration = $configuration;
		return $this;
	}
}
