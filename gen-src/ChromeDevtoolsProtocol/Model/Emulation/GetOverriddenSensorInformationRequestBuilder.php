<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetOverriddenSensorInformationRequestBuilder
{
	private $type;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetOverriddenSensorInformationRequest
	{
		$instance = new GetOverriddenSensorInformationRequest();
		if ($this->type === null) {
			throw new BuilderException('Property [type] is required.');
		}
		$instance->type = $this->type;
		return $instance;
	}


	/**
	 * @param string $type
	 *
	 * @return self
	 */
	public function setType($type): self
	{
		$this->type = $type;
		return $this;
	}
}
