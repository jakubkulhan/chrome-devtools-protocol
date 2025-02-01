<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CreateStyleSheetRequestBuilder
{
	private $frameId;
	private $force;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): CreateStyleSheetRequest
	{
		$instance = new CreateStyleSheetRequest();
		if ($this->frameId === null) {
			throw new BuilderException('Property [frameId] is required.');
		}
		$instance->frameId = $this->frameId;
		$instance->force = $this->force;
		return $instance;
	}


	/**
	 * @param string $frameId
	 *
	 * @return self
	 */
	public function setFrameId($frameId): self
	{
		$this->frameId = $frameId;
		return $this;
	}


	/**
	 * @param bool|null $force
	 *
	 * @return self
	 */
	public function setForce($force): self
	{
		$this->force = $force;
		return $this;
	}
}
