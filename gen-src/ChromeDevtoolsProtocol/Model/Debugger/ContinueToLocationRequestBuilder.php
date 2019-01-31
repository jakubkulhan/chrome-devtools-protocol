<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContinueToLocationRequestBuilder
{
	private $location;

	private $targetCallFrames;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ContinueToLocationRequest
	{
		$instance = new ContinueToLocationRequest();
		if ($this->location === null) {
			throw new BuilderException('Property [location] is required.');
		}
		$instance->location = $this->location;
		$instance->targetCallFrames = $this->targetCallFrames;
		return $instance;
	}


	/**
	 * @param Location $location
	 *
	 * @return self
	 */
	public function setLocation($location): self
	{
		$this->location = $location;
		return $this;
	}


	/**
	 * @param string|null $targetCallFrames
	 *
	 * @return self
	 */
	public function setTargetCallFrames($targetCallFrames): self
	{
		$this->targetCallFrames = $targetCallFrames;
		return $this;
	}
}
