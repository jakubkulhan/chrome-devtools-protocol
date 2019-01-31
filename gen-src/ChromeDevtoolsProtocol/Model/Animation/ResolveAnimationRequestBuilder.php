<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ResolveAnimationRequestBuilder
{
	private $animationId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ResolveAnimationRequest
	{
		$instance = new ResolveAnimationRequest();
		if ($this->animationId === null) {
			throw new BuilderException('Property [animationId] is required.');
		}
		$instance->animationId = $this->animationId;
		return $instance;
	}


	/**
	 * @param string $animationId
	 *
	 * @return self
	 */
	public function setAnimationId($animationId): self
	{
		$this->animationId = $animationId;
		return $this;
	}
}
