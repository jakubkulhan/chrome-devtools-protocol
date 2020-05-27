<?php

namespace ChromeDevtoolsProtocol\Model\Target;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttachToTargetRequestBuilder
{
	private $targetId;
	private $flatten;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): AttachToTargetRequest
	{
		$instance = new AttachToTargetRequest();
		if ($this->targetId === null) {
			throw new BuilderException('Property [targetId] is required.');
		}
		$instance->targetId = $this->targetId;
		$instance->flatten = $this->flatten;
		return $instance;
	}


	/**
	 * @param string $targetId
	 *
	 * @return self
	 */
	public function setTargetId($targetId): self
	{
		$this->targetId = $targetId;
		return $this;
	}


	/**
	 * @param bool|null $flatten
	 *
	 * @return self
	 */
	public function setFlatten($flatten): self
	{
		$this->flatten = $flatten;
		return $this;
	}
}
