<?php

namespace ChromeDevtoolsProtocol\Model\DOMDebugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBreakOnCSPViolationRequestBuilder
{
	private $violationTypes;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetBreakOnCSPViolationRequest
	{
		$instance = new SetBreakOnCSPViolationRequest();
		if ($this->violationTypes === null) {
			throw new BuilderException('Property [violationTypes] is required.');
		}
		$instance->violationTypes = $this->violationTypes;
		return $instance;
	}


	/**
	 * @param string[] $violationTypes
	 *
	 * @return self
	 */
	public function setViolationTypes($violationTypes): self
	{
		$this->violationTypes = $violationTypes;
		return $this;
	}
}
