<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPressureDataOverrideRequestBuilder
{
	private $source;
	private $state;
	private $ownContributionEstimate;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetPressureDataOverrideRequest
	{
		$instance = new SetPressureDataOverrideRequest();
		if ($this->source === null) {
			throw new BuilderException('Property [source] is required.');
		}
		$instance->source = $this->source;
		if ($this->state === null) {
			throw new BuilderException('Property [state] is required.');
		}
		$instance->state = $this->state;
		$instance->ownContributionEstimate = $this->ownContributionEstimate;
		return $instance;
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
	 * @param string $state
	 *
	 * @return self
	 */
	public function setState($state): self
	{
		$this->state = $state;
		return $this;
	}


	/**
	 * @param int|float|null $ownContributionEstimate
	 *
	 * @return self
	 */
	public function setOwnContributionEstimate($ownContributionEstimate): self
	{
		$this->ownContributionEstimate = $ownContributionEstimate;
		return $this;
	}
}
