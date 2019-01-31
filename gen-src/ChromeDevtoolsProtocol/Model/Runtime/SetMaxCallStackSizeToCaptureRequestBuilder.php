<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetMaxCallStackSizeToCaptureRequestBuilder
{
	private $size;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetMaxCallStackSizeToCaptureRequest
	{
		$instance = new SetMaxCallStackSizeToCaptureRequest();
		if ($this->size === null) {
			throw new BuilderException('Property [size] is required.');
		}
		$instance->size = $this->size;
		return $instance;
	}


	/**
	 * @param int $size
	 *
	 * @return self
	 */
	public function setSize($size): self
	{
		$this->size = $size;
		return $this;
	}
}
