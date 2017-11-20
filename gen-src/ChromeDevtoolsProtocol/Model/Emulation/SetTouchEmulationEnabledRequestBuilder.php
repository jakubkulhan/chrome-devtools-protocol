<?php
namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetTouchEmulationEnabledRequestBuilder
{
	private $enabled;

	private $maxTouchPoints;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetTouchEmulationEnabledRequest
	{
		$instance = new SetTouchEmulationEnabledRequest();
		if ($this->enabled === null) {
			throw new BuilderException('Property [enabled] is required.');
		}
		$instance->enabled = $this->enabled;
		$instance->maxTouchPoints = $this->maxTouchPoints;
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
	 * @param int|null $maxTouchPoints
	 *
	 * @return self
	 */
	public function setMaxTouchPoints($maxTouchPoints): self
	{
		$this->maxTouchPoints = $maxTouchPoints;
		return $this;
	}
}
