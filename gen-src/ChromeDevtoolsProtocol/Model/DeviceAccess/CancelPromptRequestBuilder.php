<?php

namespace ChromeDevtoolsProtocol\Model\DeviceAccess;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CancelPromptRequestBuilder
{
	private $id;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): CancelPromptRequest
	{
		$instance = new CancelPromptRequest();
		if ($this->id === null) {
			throw new BuilderException('Property [id] is required.');
		}
		$instance->id = $this->id;
		return $instance;
	}


	/**
	 * @param string $id
	 *
	 * @return self
	 */
	public function setId($id): self
	{
		$this->id = $id;
		return $this;
	}
}
