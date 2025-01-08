<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetLonghandPropertiesRequestBuilder
{
	private $shorthandName;
	private $value;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetLonghandPropertiesRequest
	{
		$instance = new GetLonghandPropertiesRequest();
		if ($this->shorthandName === null) {
			throw new BuilderException('Property [shorthandName] is required.');
		}
		$instance->shorthandName = $this->shorthandName;
		if ($this->value === null) {
			throw new BuilderException('Property [value] is required.');
		}
		$instance->value = $this->value;
		return $instance;
	}


	/**
	 * @param string $shorthandName
	 *
	 * @return self
	 */
	public function setShorthandName($shorthandName): self
	{
		$this->shorthandName = $shorthandName;
		return $this;
	}


	/**
	 * @param string $value
	 *
	 * @return self
	 */
	public function setValue($value): self
	{
		$this->value = $value;
		return $this;
	}
}
