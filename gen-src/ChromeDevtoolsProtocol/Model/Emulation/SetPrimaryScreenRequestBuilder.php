<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPrimaryScreenRequestBuilder
{
	private $screenId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetPrimaryScreenRequest
	{
		$instance = new SetPrimaryScreenRequest();
		if ($this->screenId === null) {
			throw new BuilderException('Property [screenId] is required.');
		}
		$instance->screenId = $this->screenId;
		return $instance;
	}


	/**
	 * @param string $screenId
	 *
	 * @return self
	 */
	public function setScreenId($screenId): self
	{
		$this->screenId = $screenId;
		return $this;
	}
}
