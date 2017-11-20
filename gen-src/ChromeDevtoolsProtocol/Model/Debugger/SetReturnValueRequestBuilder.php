<?php
namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;
use ChromeDevtoolsProtocol\Model\Runtime\CallArgument;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetReturnValueRequestBuilder
{
	private $newValue;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetReturnValueRequest
	{
		$instance = new SetReturnValueRequest();
		if ($this->newValue === null) {
			throw new BuilderException('Property [newValue] is required.');
		}
		$instance->newValue = $this->newValue;
		return $instance;
	}


	/**
	 * @param CallArgument $newValue
	 *
	 * @return self
	 */
	public function setNewValue($newValue): self
	{
		$this->newValue = $newValue;
		return $this;
	}
}
