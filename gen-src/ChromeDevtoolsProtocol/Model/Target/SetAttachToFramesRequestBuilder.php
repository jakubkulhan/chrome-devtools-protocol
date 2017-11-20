<?php
namespace ChromeDevtoolsProtocol\Model\Target;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAttachToFramesRequestBuilder
{
	private $value;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetAttachToFramesRequest
	{
		$instance = new SetAttachToFramesRequest();
		if ($this->value === null) {
			throw new BuilderException('Property [value] is required.');
		}
		$instance->value = $this->value;
		return $instance;
	}


	/**
	 * @param bool $value
	 *
	 * @return self
	 */
	public function setValue($value): self
	{
		$this->value = $value;
		return $this;
	}
}
