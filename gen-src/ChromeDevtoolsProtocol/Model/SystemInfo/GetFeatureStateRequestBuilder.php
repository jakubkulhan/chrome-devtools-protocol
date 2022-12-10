<?php

namespace ChromeDevtoolsProtocol\Model\SystemInfo;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetFeatureStateRequestBuilder
{
	private $featureState;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetFeatureStateRequest
	{
		$instance = new GetFeatureStateRequest();
		if ($this->featureState === null) {
			throw new BuilderException('Property [featureState] is required.');
		}
		$instance->featureState = $this->featureState;
		return $instance;
	}


	/**
	 * @param string $featureState
	 *
	 * @return self
	 */
	public function setFeatureState($featureState): self
	{
		$this->featureState = $featureState;
		return $this;
	}
}
