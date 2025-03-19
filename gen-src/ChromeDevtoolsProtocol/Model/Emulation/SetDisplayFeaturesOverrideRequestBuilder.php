<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDisplayFeaturesOverrideRequestBuilder
{
	private $features;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetDisplayFeaturesOverrideRequest
	{
		$instance = new SetDisplayFeaturesOverrideRequest();
		if ($this->features === null) {
			throw new BuilderException('Property [features] is required.');
		}
		$instance->features = $this->features;
		return $instance;
	}


	/**
	 * @param DisplayFeature[] $features
	 *
	 * @return self
	 */
	public function setFeatures($features): self
	{
		$this->features = $features;
		return $this;
	}
}
