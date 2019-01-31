<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReleaseObjectGroupRequestBuilder
{
	private $objectGroup;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ReleaseObjectGroupRequest
	{
		$instance = new ReleaseObjectGroupRequest();
		if ($this->objectGroup === null) {
			throw new BuilderException('Property [objectGroup] is required.');
		}
		$instance->objectGroup = $this->objectGroup;
		return $instance;
	}


	/**
	 * @param string $objectGroup
	 *
	 * @return self
	 */
	public function setObjectGroup($objectGroup): self
	{
		$this->objectGroup = $objectGroup;
		return $this;
	}
}
