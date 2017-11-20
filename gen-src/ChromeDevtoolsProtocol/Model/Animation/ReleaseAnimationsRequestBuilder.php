<?php
namespace ChromeDevtoolsProtocol\Model\Animation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReleaseAnimationsRequestBuilder
{
	private $animations;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ReleaseAnimationsRequest
	{
		$instance = new ReleaseAnimationsRequest();
		if ($this->animations === null) {
			throw new BuilderException('Property [animations] is required.');
		}
		$instance->animations = $this->animations;
		return $instance;
	}


	/**
	 * @param string[] $animations
	 *
	 * @return self
	 */
	public function setAnimations($animations): self
	{
		$this->animations = $animations;
		return $this;
	}
}
